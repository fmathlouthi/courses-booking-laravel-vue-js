<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSemesterCourseVarianteRequest;
use App\Http\Requests\UpdateSemesterCourseVarianteRequest;
use App\Http\Resources\Admin\SemesterCourseVarianteResource;
use App\Models\SemesterCourse;
use App\Models\SemesterCourseVariante;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SemesterCourseVarianteApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('semester_course_variante_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SemesterCourseVarianteResource(SemesterCourseVariante::with(['semesterCourse'])->advancedFilter());
    }

    public function store(StoreSemesterCourseVarianteRequest $request)
    {
        $semesterCourseVariante = SemesterCourseVariante::create($request->validated());

        return (new SemesterCourseVarianteResource($semesterCourseVariante))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('semester_course_variante_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'semester_course' => SemesterCourse::get(['id', 'name']),
            ],
        ]);
    }

    public function show(SemesterCourseVariante $semesterCourseVariante)
    {
        abort_if(Gate::denies('semester_course_variante_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SemesterCourseVarianteResource($semesterCourseVariante->load(['semesterCourse']));
    }

    public function update(UpdateSemesterCourseVarianteRequest $request, SemesterCourseVariante $semesterCourseVariante)
    {
        $semesterCourseVariante->update($request->validated());

        return (new SemesterCourseVarianteResource($semesterCourseVariante))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(SemesterCourseVariante $semesterCourseVariante)
    {
        abort_if(Gate::denies('semester_course_variante_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new SemesterCourseVarianteResource($semesterCourseVariante->load(['semesterCourse'])),
            'meta' => [
                'semester_course' => SemesterCourse::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(SemesterCourseVariante $semesterCourseVariante)
    {
        abort_if(Gate::denies('semester_course_variante_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $semesterCourseVariante->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
