<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectPathwayRequest;
use App\Http\Requests\UpdateSubjectPathwayRequest;
use App\Http\Resources\Admin\SubjectPathwayResource;
use App\Models\SubjectPathway;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubjectPathwayApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('availability_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
 
        return new SubjectPathwayResource(SubjectPathway::advancedFilter());
    }

    public function store(StoreSubjectPathwayRequest $request)
    {
        $subject = SubjectPathway::create($request->validated());

        return (new SubjectPathwayResource($subject))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('availability_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'status'  => Subject::STATUS_SELECT,],
        ]);
    }

    public function show(Subject $subject)
    {
        abort_if(Gate::denies('availability_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SubjectPathwayResource($subject);
    }

    public function update(UpdateSubjectPathwayRequest $request, SubjectPathway $subject)
    {
        $subject->update($request->validated());

        return (new SubjectPathwayResource($subject))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(SubjectPathway $subject)
    {
        abort_if(Gate::denies('availability_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new SubjectPathwayResource($subject),
            'meta' => [
                
                'status'  => SubjectPathway::STATUS_SELECT,
            ],
        ]);
    }

    public function destroy(SubjectPathway $subject)
    {
        abort_if(Gate::denies('availability_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subject->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    public function active( $id)
    {
        abort_if(Gate::denies('availability_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $subject = SubjectPathway::find($id);
        if($subject->status == "active")
        {
            $subject->status = "inactive";
        }
        else
        {
            $subject->status = "active";
        }
        $subject->save();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
