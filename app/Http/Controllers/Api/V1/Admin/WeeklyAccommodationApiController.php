<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWeeklyAccommodationRequest;
use App\Http\Requests\UpdateWeeklyAccommodationRequest;
use App\Http\Resources\Admin\WeeklyAccommodationResource;
use App\Models\Availability;
use App\Models\City;
use App\Models\Feature;
use App\Models\WeeklyAccommodation;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\Models\Media;

class WeeklyAccommodationApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('weekly_accommodation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WeeklyAccommodationResource(WeeklyAccommodation::with(['city'])->advancedFilter());
    }

    public function store(StoreWeeklyAccommodationRequest $request)
    {
        $weeklyAccommodation = WeeklyAccommodation::create($request->validated());
        $weeklyAccommodation->availability()->sync($request->input('availability.*.id', []));
        $weeklyAccommodation->features()->sync($request->input('features.*.id', []));
        if ($media = $request->input('photos', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $weeklyAccommodation->id]);
        }

        if ($media = $request->input('featured_image', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $weeklyAccommodation->id]);
        }

        return (new WeeklyAccommodationResource($weeklyAccommodation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('weekly_accommodation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'city'         => City::get(['id', 'name']),
                'availability' => Availability::get(['id', 'name']),
                'features'     => Feature::get(['id', 'name']),
            ],
        ]);
    }

    public function show(WeeklyAccommodation $weeklyAccommodation)
    {
        abort_if(Gate::denies('weekly_accommodation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WeeklyAccommodationResource($weeklyAccommodation->load(['city', 'availability', 'features']));
    }

    public function update(UpdateWeeklyAccommodationRequest $request, WeeklyAccommodation $weeklyAccommodation)
    {
        $weeklyAccommodation->update($request->validated());
        $weeklyAccommodation->availability()->sync($request->input('availability.*.id', []));
        $weeklyAccommodation->features()->sync($request->input('features.*.id', []));
        $weeklyAccommodation->updateMedia($request->input('photos', []), 'weekly_accommodation_photos');
        $weeklyAccommodation->updateMedia($request->input('featured_image', []), 'weekly_accommodation_featured_image');

        return (new WeeklyAccommodationResource($weeklyAccommodation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(WeeklyAccommodation $weeklyAccommodation)
    {
        abort_if(Gate::denies('weekly_accommodation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new WeeklyAccommodationResource($weeklyAccommodation->load(['city', 'availability', 'features'])),
            'meta' => [
                'city'         => City::get(['id', 'name']),
                'availability' => Availability::get(['id', 'name']),
                'features'     => Feature::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(WeeklyAccommodation $weeklyAccommodation)
    {
        abort_if(Gate::denies('weekly_accommodation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $weeklyAccommodation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['weekly_accommodation_create', 'weekly_accommodation_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model         = new WeeklyAccommodation();
        $model->id     = $request->input('model_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));

        return response()->json($media, Response::HTTP_CREATED);
    }
}
