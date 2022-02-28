<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Http\Resources\Admin\SubjectResource;
use App\Models\Subject;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubjectApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('availability_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
 
        return new SubjectResource(Subject::advancedFilter());
    }

    public function store(StoreSubjectRequest $request)
    {
        $subject = Subject::create($request->validated());

        return (new SubjectResource($subject))
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

        return new SubjectResource($subject);
    }

    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject->update($request->validated());

        return (new SubjectResource($subject))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Subject $subject)
    {
        abort_if(Gate::denies('availability_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new SubjectResource($subject),
            'meta' => [
                
                'status'  => Subject::STATUS_SELECT,
            ],
        ]);
    }

    public function destroy(Subject $subject)
    {
        abort_if(Gate::denies('availability_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subject->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    public function active( $id)
    {
        abort_if(Gate::denies('availability_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $subject = Subject::find($id);
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
