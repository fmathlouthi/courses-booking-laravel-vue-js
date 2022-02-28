<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectProgramRequest;
use App\Http\Requests\UpdateSubjectProgramRequest;
use App\Http\Resources\Admin\SubjectProgramResource;
use App\Models\Subject;
use App\Models\SubjectProgram;
use App\Models\UniversitySubject;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubjectProgramsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('subject_program_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
 
        return new SubjectProgramResource(SubjectProgram::with(['university','subject'])->advancedFilter());
    }

    public function store(StoreSubjectProgramRequest $request)
    {
        $subjectProgram = SubjectProgram::create($request->validated());

        return (new SubjectProgramResource($subjectProgram))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('subject_program_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'university' => UniversitySubject::get(['id', 'name']),
                'subject' => Subject::get(['id', 'name']),
                'type' => UniversitySubject::TYPE_SELECT,
            ],
        ]);
    }

    public function show(SubjectProgram $subjectProgram)
    {
        abort_if(Gate::denies('subject_program_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SubjectProgramResource($subjectProgram->load(['university','subject']));
    }

    public function update(UpdateSubjectProgramRequest $request, SubjectProgram $subjectProgram)
    {
        $subjectProgram->update($request->validated());

        return (new SubjectProgramResource($subjectProgram))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(SubjectProgram $subjectProgram)
    {
        abort_if(Gate::denies('subject_program_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new SubjectProgramResource($subjectProgram->load(['university','subject'])),
            'meta' => [
                'university' => UniversitySubject::get(['id', 'name']),
                'subject' => Subject::get(['id', 'name']),
                'type' => UniversitySubject::TYPE_SELECT,
            ],
        ]);
    }

    public function destroy(SubjectProgram $subjectProgram)
    {
        abort_if(Gate::denies('subject_program_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subjectProgram->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
