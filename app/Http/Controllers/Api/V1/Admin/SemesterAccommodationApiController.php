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
}
