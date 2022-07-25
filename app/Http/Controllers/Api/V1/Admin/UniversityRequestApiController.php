<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUniversityRequestRequest;
use App\Http\Requests\UpdateUniversityRequestRequest;
use App\Http\Resources\Admin\UniversityRequestResource;
use App\Models\Subject;
use App\Models\UniversityRequest;
use App\Models\UniversitySubject;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UniversityRequestApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('university_request_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UniversityRequestResource(UniversityRequest::with(['subject', 'university'])->advancedFilter());
    }

    public function store(StoreUniversityRequestRequest $request)
    {
        $universityRequest = UniversityRequest::create($request->validated());

        return (new UniversityRequestResource($universityRequest))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('university_request_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'subject'        => Subject::get(['id', 'name']),
                'university'     => UniversitySubject::get(['id', 'name']),
                'gendre'         => UniversityRequest::GENDRE_RADIO,
                'nationality'    => UniversityRequest::NATIONALITY_SELECT,
                'level_of_study' => UniversityRequest::LEVEL_OF_STUDY_SELECT,
            ],
        ]);
    }

    public function show(UniversityRequest $universityRequest)
    {
        abort_if(Gate::denies('university_request_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UniversityRequestResource($universityRequest->load(['subject', 'university']));
    }

    public function update(UpdateUniversityRequestRequest $request, UniversityRequest $universityRequest)
    {
        $universityRequest->update($request->validated());

        return (new UniversityRequestResource($universityRequest))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(UniversityRequest $universityRequest)
    {
        abort_if(Gate::denies('university_request_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new UniversityRequestResource($universityRequest->load(['subject', 'university'])),
            'meta' => [
                'subject'        => Subject::get(['id', 'name']),
                'university'     => UniversitySubject::get(['id', 'name']),
                'gendre'         => UniversityRequest::GENDRE_RADIO,
                'nationality'    => UniversityRequest::NATIONALITY_SELECT,
                'level_of_study' => UniversityRequest::LEVEL_OF_STUDY_SELECT,
            ],
        ]);
    }

    public function destroy(UniversityRequest $universityRequest)
    {
        abort_if(Gate::denies('university_request_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universityRequest->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
