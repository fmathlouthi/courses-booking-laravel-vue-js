<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccommodationOrderRequest;
use App\Http\Requests\StoreAccommodationRequest;
use App\Http\Requests\UpdateAccommodationOrderRequest;
use App\Http\Resources\Admin\AccommodationOrderResource;
use App\Models\AccommodationOrder;
use App\Models\SemesterAccommodation;
use App\Models\SemesterAccommVariante;
use App\Models\User;
use Gate;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Auth;

class AccommodationOrderApiController extends Controller
{
    public function index()
    {
        
        abort_if(Gate::denies('course_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user = Auth::user();
        $role = $user->roles;
        $rolename=$role[0];
        
        if ( strcmp($rolename->title,"User") == 0) {
            
            return new AccommodationOrderResource(AccommodationOrder::with(['client',  'accommodationvariante',  'accommodation'])->where('client_id',$user->id)->advancedFilter());
   
        }
        return new AccommodationOrderResource(AccommodationOrder::with(['client', 'accommodationvariante',  'accommodation'])->advancedFilter());
    }

    public function store(StoreAccommodationOrderRequest $request)
    {
        $AccommodationOrder = AccommodationOrder::create($request->validated());

        return (new AccommodationOrderResource($AccommodationOrder))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('course_order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'client'         => User::get(['id', 'name']),
                'accommodation'         => SemesterAccommodation::get(['id', 'name']),
                'accommodationvariante'  => SemesterAccommVariante::get(['id', 'starting_date','weeksnumber']),
                'payment_method' => AccommodationOrder::PAYMENT_METHOD_SELECT,
                'payment_status' => AccommodationOrder::PAYMENT_STATUS_SELECT,
                'status'         => AccommodationOrder::STATUS_SELECT,
            ],
        ]);
    }

    public function show(AccommodationOrder $AccommodationOrder)
    {
        abort_if(Gate::denies('course_order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AccommodationOrderResource($AccommodationOrder->load(['client',  'accommodationvariante',  'accommodation']));
    }

    public function update(UpdateAccommodationOrderRequest $request, AccommodationOrder $AccommodationOrder)
    {
        $AccommodationOrder->update($request->validated());

        return (new AccommodationOrderResource($AccommodationOrder))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(AccommodationOrder $AccommodationOrder)
    {
        abort_if(Gate::denies('course_order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new AccommodationOrderResource($AccommodationOrder->load(['client', 'accommodationvariante',  'accommodation'])),
            'meta' => [
                'client'         => User::get(['id', 'name']),
                'accommodation'         => SemesterAccommodation::get(['id', 'name']),
                'accommodationvariante'  => SemesterAccommVariante::get(['id', 'starting_date','weeksnumber']),
                'payment_method' => AccommodationOrder::PAYMENT_METHOD_SELECT,
                'payment_status' => AccommodationOrder::PAYMENT_STATUS_SELECT,
                'status'         => AccommodationOrder::STATUS_SELECT,
            ],
        ]);
    }

    public function destroy(AccommodationOrder $AccommodationOrder)
    {
        abort_if(Gate::denies('course_order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $AccommodationOrder->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    public function active( $id)
    {
        abort_if(Gate::denies('course_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $AccommodationOrder = AccommodationOrder::find($id);
        if($AccommodationOrder->status == "process")
        {
            $AccommodationOrder->status = "cancel";
        }
        else
        {
            $AccommodationOrder->status = "process";
        }
        $AccommodationOrder->save();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
