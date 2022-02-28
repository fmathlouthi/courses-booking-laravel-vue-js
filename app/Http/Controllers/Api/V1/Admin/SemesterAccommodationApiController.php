<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSemesterAccommodationRequest;
use App\Http\Requests\UpdateSemesterAccommodationRequest;
use App\Http\Resources\Admin\SemesterAccommodationResource;
use App\Models\City;
use App\Models\Feature;
use App\Models\SemesterAccommodation;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\Models\Media;

class SemesterAccommodationApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('semester_accommodation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SemesterAccommodationResource(SemesterAccommodation::with(['city','semesteraccommvariante'])->advancedFilter());
    }

    public function store(StoreSemesterAccommodationRequest $request)
    {
        $semesterAccommodation = SemesterAccommodation::create($request->validated());
        $semesterAccommodation->features()->sync($request->input('features.*.id', []));
        if ($media = $request->input('photos', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $semesterAccommodation->id]);
        }
 
        if ($media = $request->input('featured_image', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $semesterAccommodation->id]);
        }
        return (new SemesterAccommodationResource($semesterAccommodation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('semester_accommodation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'city'     => City::get(['id', 'name']),
                'features' => Feature::get(['id', 'name']),
            ],
        ]);
    }

    public function show(SemesterAccommodation $semesterAccommodation)
    {
        abort_if(Gate::denies('semester_accommodation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SemesterAccommodationResource($semesterAccommodation->load(['city', 'features','semesteraccommvariante']));
    }

    public function update(UpdateSemesterAccommodationRequest $request, SemesterAccommodation $semesterAccommodation)
    {
        $semesterAccommodation->update($request->validated());
        $semesterAccommodation->features()->sync($request->input('features.*.id', []));

        $semesterAccommodation->updateMedia($request->input('photos', []), 'accommodations_photos');
        $semesterAccommodation->updateMedia($request->input('featured_image', []), 'accommodations_featured_image');
        return (new SemesterAccommodationResource($semesterAccommodation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(SemesterAccommodation $semesterAccommodation)
    {
        abort_if(Gate::denies('semester_accommodation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new SemesterAccommodationResource($semesterAccommodation->load(['city', 'features'])),
            'meta' => [
                'city'     => City::get(['id', 'name']),
                'features' => Feature::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(SemesterAccommodation $semesterAccommodation)
    {
        abort_if(Gate::denies('semester_accommodation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $semesterAccommodation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['semester_accommodation_create', 'semester_accommodation_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model         = new SemesterAccommodation();
        $model->id     = $request->input('model_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));

        return response()->json($media, Response::HTTP_CREATED);
    }
}
