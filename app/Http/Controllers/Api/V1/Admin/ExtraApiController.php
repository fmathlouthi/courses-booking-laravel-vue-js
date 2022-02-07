<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExtraRequest;
use App\Http\Requests\UpdateExtraRequest;
use App\Http\Resources\Admin\ExtraResource;
use App\Models\Extra;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExtraApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('extra_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ExtraResource(Extra::advancedFilter());
    }

    public function store(StoreExtraRequest $request)
    {
        $extra = Extra::create($request->validated());

        return (new ExtraResource($extra))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('extra_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(Extra $extra)
    {
        abort_if(Gate::denies('extra_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ExtraResource($extra);
    }

    public function update(UpdateExtraRequest $request, Extra $extra)
    {
        $extra->update($request->validated());

        return (new ExtraResource($extra))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Extra $extra)
    {
        abort_if(Gate::denies('extra_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new ExtraResource($extra),
            'meta' => [],
        ]);
    }

    public function destroy(Extra $extra)
    {
        abort_if(Gate::denies('extra_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $extra->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
