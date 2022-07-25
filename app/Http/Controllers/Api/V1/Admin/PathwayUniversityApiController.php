<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePathwayUniversityRequest;
use App\Http\Requests\UpdatePathwayUniversityRequest;
use App\Http\Resources\Admin\PathwayUniversityResource;
use App\Models\PathwayUniversity;
use Gate;
use App\Models\City;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\Models\Media;

class PathwayUniversityApiController extends Controller
{
    public function index() 
    {
        abort_if(Gate::denies('pathway_university_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PathwayUniversityResource(PathwayUniversity::with(['city','features'])->advancedFilter());
    }

    public function store(StorePathwayUniversityRequest $request)
    {
        $pathwayUniversity = PathwayUniversity::create($request->validated());

        $pathwayUniversity->features()->sync($request->input('features.*.id', []));
        if ($media = $request->input('pathbrochure', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $pathwayUniversity->id]);
        }

        if ($media = $request->input('featured_image', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $pathwayUniversity->id]);
        }

        if ($media = $request->input('photos', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $pathwayUniversity->id]);
        }

        return (new PathwayUniversityResource($pathwayUniversity))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('pathway_university_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        return response([
            'meta' => [
                'city'          => City::get(['id', 'name']),
                'features'      => Feature::get(['id', 'name']),
            ],
        ]);
    }

    public function show(PathwayUniversity $pathwayUniversity)
    {
        abort_if(Gate::denies('pathway_university_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PathwayUniversityResource($pathwayUniversity->load(['city', 'features']));
    }

    public function update(UpdatePathwayUniversityRequest $request, PathwayUniversity $pathwayUniversity)
    { 
        $pathwayUniversity->update($request->validated());

        $pathwayUniversity->updateMedia($request->input('pathbrochure', []), 'pathway_university_pathbrochure');
        $pathwayUniversity->updateMedia($request->input('featured_image', []), 'pathway_university_featured_image');
        $pathwayUniversity->updateMedia($request->input('photos', []), 'pathway_university_photos');
        $pathwayUniversity->features()->sync($request->input('features.*.id', []));

        return (new PathwayUniversityResource($pathwayUniversity))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(PathwayUniversity $pathwayUniversity)
    {
        abort_if(Gate::denies('pathway_university_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new PathwayUniversityResource($pathwayUniversity->load(['city', 'features'])),
            'meta' => [
                'city'          => City::get(['id', 'name']),
                'features'      => Feature::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(PathwayUniversity $pathwayUniversity)
    {
        abort_if(Gate::denies('pathway_university_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pathwayUniversity->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['pathway_university_create', 'pathway_university_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model         = new PathwayUniversity();
        $model->id     = $request->input('model_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));

        return response()->json($media, Response::HTTP_CREATED);
    }
}
