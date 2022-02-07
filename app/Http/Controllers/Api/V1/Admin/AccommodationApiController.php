<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccommodationRequest;
use App\Http\Requests\UpdateAccommodationRequest;
use App\Http\Resources\Admin\AccommodationResource;
use App\Models\Accommodation;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AccommodationApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('accommodation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AccommodationResource(Accommodation::advancedFilter());
    }

    public function store(StoreAccommodationRequest $request)
    {
        $accommodation = Accommodation::create($request->validated());

        return (new AccommodationResource($accommodation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('accommodation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(Accommodation $accommodation)
    {
        abort_if(Gate::denies('accommodation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AccommodationResource($accommodation);
    }

    public function update(UpdateAccommodationRequest $request, Accommodation $accommodation)
    {
        $accommodation->update($request->validated());

        return (new AccommodationResource($accommodation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Accommodation $accommodation)
    {
        abort_if(Gate::denies('accommodation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new AccommodationResource($accommodation),
            'meta' => [],
        ]);
    }

    public function destroy(Accommodation $accommodation)
    {
        abort_if(Gate::denies('accommodation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $accommodation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
