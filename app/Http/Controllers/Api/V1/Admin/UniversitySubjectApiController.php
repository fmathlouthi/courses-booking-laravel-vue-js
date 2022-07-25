<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUniversitySubjectRequest;
use App\Http\Requests\UpdateUniversitySubjectRequest;
use App\Http\Resources\Admin\UniversitySubjectResource;
use App\Models\City;
use App\Models\UniversitySubject;
use App\Models\Feature;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\Models\Media;

class UniversitySubjectApiController extends Controller
{ 
    public function index()
    {
        abort_if(Gate::denies('university_subject_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UniversitySubjectResource(UniversitySubject::with(['city', 'features'])->advancedFilter());
    }

    public function store(StoreUniversitySubjectRequest $request)
    {
        $universitySubject = UniversitySubject::create($request->validated());

        if ($media = $request->input('pathbrochure', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $universitySubject->id]);
        }

        if ($media = $request->input('photos', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $universitySubject->id]);
        }

        if ($media = $request->input('featured_image', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $universitySubject->id]);
        }

        $universitySubject->features()->sync($request->input('features.*.id', []));
        return (new UniversitySubjectResource($universitySubject))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('university_subject_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'city' => City::get(['id', 'name']),
                'type' => UniversitySubject::TYPE_SELECT,
                'features'      => Feature::get(['id', 'name']),
            ],
        ]);
    }

    public function show(UniversitySubject $universitySubject)
    {
        abort_if(Gate::denies('university_subject_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UniversitySubjectResource($universitySubject->load(['city', 'features']));
    }

    public function update(UpdateUniversitySubjectRequest $request, UniversitySubject $universitySubject)
    {
        $universitySubject->update($request->validated());

        $universitySubject->updateMedia($request->input('pathbrochure', []), 'university_subject_pathbrochure');
        $universitySubject->updateMedia($request->input('photos', []), 'university_subject_photos');
        $universitySubject->updateMedia($request->input('featured_image', []), 'university_subject_featured_image');

        $universitySubject->features()->sync($request->input('features.*.id', []));
        return (new UniversitySubjectResource($universitySubject))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(UniversitySubject $universitySubject)
    {
        abort_if(Gate::denies('university_subject_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new UniversitySubjectResource($universitySubject->load(['city', 'features'])),
            'meta' => [
                'city' => City::get(['id', 'name']),
                'type' => UniversitySubject::TYPE_SELECT,
                'features'      => Feature::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(UniversitySubject $universitySubject)
    {
        abort_if(Gate::denies('university_subject_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universitySubject->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['university_subject_create', 'university_subject_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model         = new UniversitySubject();
        $model->id     = $request->input('model_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));

        return response()->json($media, Response::HTTP_CREATED);
    }
}
