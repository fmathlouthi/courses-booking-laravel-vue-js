<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSemesterCourseRequest;
use App\Http\Requests\UpdateSemesterCourseRequest;
use App\Http\Resources\Admin\SemesterCourseResource;
use App\Models\SemesterCourse;
use App\Models\UnivercityCourse;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SemesterCourseApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('semester_course_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SemesterCourseResource(SemesterCourse::with(['university','semestrecoursesvariante'])->advancedFilter());
    }

    public function store(StoreSemesterCourseRequest $request)
    {
        $semesterCourse = SemesterCourse::create($request->validated());

        return (new SemesterCourseResource($semesterCourse))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('semester_course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'university' => UnivercityCourse::get(['id', 'name']),
            ],
        ]);
    }

    public function show(SemesterCourse $semesterCourse)
    {
        abort_if(Gate::denies('semester_course_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SemesterCourseResource($semesterCourse->load(['university','semestrecoursesvariante']));
    }

    public function update(UpdateSemesterCourseRequest $request, SemesterCourse $semesterCourse)
    {
        $semesterCourse->update($request->validated());

        return (new SemesterCourseResource($semesterCourse))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(SemesterCourse $semesterCourse)
    {
        abort_if(Gate::denies('semester_course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new SemesterCourseResource($semesterCourse->load(['university'])),
            'meta' => [
                'university' => UnivercityCourse::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(SemesterCourse $semesterCourse)
    {
        abort_if(Gate::denies('semester_course_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $semesterCourse->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
