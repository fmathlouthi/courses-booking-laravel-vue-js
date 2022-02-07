<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSemesterAccommVarianteRequest;
use App\Http\Requests\UpdateSemesterAccommVarianteRequest;
use App\Http\Resources\Admin\SemesterAccommVarianteResource;
use App\Models\SemesterAccommodation;
use App\Models\SemesterAccommVariante;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SemesterAccommVariantesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('semester_accomm_variante_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SemesterAccommVarianteResource(SemesterAccommVariante::with(['semesterAccommodation'])->advancedFilter());
    }

    public function store(StoreSemesterAccommVarianteRequest $request)
    {
        $semesterAccommVariante = SemesterAccommVariante::create($request->validated());

        return (new SemesterAccommVarianteResource($semesterAccommVariante))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('semester_accomm_variante_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'semester_accommodation' => SemesterAccommodation::get(['id', 'name']),
            ],
        ]);
    }

    public function show(SemesterAccommVariante $semesterAccommVariante)
    {
        abort_if(Gate::denies('semester_accomm_variante_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SemesterAccommVarianteResource($semesterAccommVariante->load(['semesterAccommodation']));
    }

    public function update(UpdateSemesterAccommVarianteRequest $request, SemesterAccommVariante $semesterAccommVariante)
    {
        $semesterAccommVariante->update($request->validated());

        return (new SemesterAccommVarianteResource($semesterAccommVariante))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(SemesterAccommVariante $semesterAccommVariante)
    {
        abort_if(Gate::denies('semester_accomm_variante_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new SemesterAccommVarianteResource($semesterAccommVariante->load(['semesterAccommodation'])),
            'meta' => [
                'semester_accommodation' => SemesterAccommodation::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(SemesterAccommVariante $semesterAccommVariante)
    {
        abort_if(Gate::denies('semester_accomm_variante_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $semesterAccommVariante->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
