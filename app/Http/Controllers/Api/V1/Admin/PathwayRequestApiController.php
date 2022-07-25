<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePathwayRequestRequest;
use App\Http\Requests\UpdatePathwayRequestRequest;
use App\Http\Resources\Admin\PathwayRequestResource;
use App\Models\Pathway;
use App\Models\PathwayRequest;
use App\Models\PathwayUniversity;
use App\Models\SubjectPathway;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PathwayRequestApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pathway_request_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PathwayRequestResource(PathwayRequest::with(['universityDegree', 'subject', 'university'])->advancedFilter());
    }

    public function store(StorePathwayRequestRequest $request)
    {
        $pathwayRequest = PathwayRequest::create($request->validated());

        return (new PathwayRequestResource($pathwayRequest))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('pathway_request_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'university_degree' => Pathway::get(['id', 'name']),
                'subject'           => SubjectPathway::get(['id', 'name']),
                'university'        => PathwayUniversity::get(['id', 'name']),
                'gendre'            => PathwayRequest::GENDRE_RADIO,
                'nationality'       => PathwayRequest::NATIONALITY_SELECT,
                'level_of_study'    => PathwayRequest::LEVEL_OF_STUDY_SELECT,
            ],
        ]);
    }

    public function show(PathwayRequest $pathwayRequest)
    {
        abort_if(Gate::denies('pathway_request_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PathwayRequestResource($pathwayRequest->load(['universityDegree', 'subject', 'university']));
    }

    public function update(UpdatePathwayRequestRequest $request, PathwayRequest $pathwayRequest)
    {
        $pathwayRequest->update($request->validated());

        return (new PathwayRequestResource($pathwayRequest))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(PathwayRequest $pathwayRequest)
    {
        abort_if(Gate::denies('pathway_request_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new PathwayRequestResource($pathwayRequest->load(['universityDegree', 'subject', 'university'])),
            'meta' => [
                'university_degree' => Pathway::get(['id', 'name']),
                'subject'           => SubjectPathway::get(['id', 'name']),
                'university'        => PathwayUniversity::get(['id', 'name']),
                'gendre'            => PathwayRequest::GENDRE_RADIO,
                'nationality'       => PathwayRequest::NATIONALITY_SELECT,
                'level_of_study'    => PathwayRequest::LEVEL_OF_STUDY_SELECT,
            ],
        ]);
    }

    public function destroy(PathwayRequest $pathwayRequest)
    {
        abort_if(Gate::denies('pathway_request_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pathwayRequest->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
