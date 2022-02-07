<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Http\Resources\Admin\CityResource;
use App\Models\City;
use App\Models\Country;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CityApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('city_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CityResource(City::with(['country'])->advancedFilter());
    }

    public function store(StoreCityRequest $request)
    {
        $city = City::create($request->validated());

        return (new CityResource($city))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('city_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'country' => Country::get(['id', 'name']),
                'status'  => City::STATUS_SELECT,
            ],
        ]);
    }

    public function show(City $city)
    {
        abort_if(Gate::denies('city_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CityResource($city->load(['country']));
    }

    public function update(UpdateCityRequest $request, City $city)
    {
        $city->update($request->validated());

        return (new CityResource($city))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(City $city)
    {
        abort_if(Gate::denies('city_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new CityResource($city->load(['country'])),
            'meta' => [
                'country' => Country::get(['id', 'name']),
                'status'  => City::STATUS_SELECT,
            ],
        ]);
    }

    public function destroy(City $city)
    {
        abort_if(Gate::denies('city_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $city->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    public function active( $id)
    {
        abort_if(Gate::denies('city_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $city = City::find($id);
        if($city->status == "active")
        {
            $city->status = "inactive";
        }
        else
        {
            $city->status = "active";
        }
        $city->save();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
