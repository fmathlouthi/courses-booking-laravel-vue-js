<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUnivercityCourseRequest;
use App\Http\Requests\UpdateUnivercityCourseRequest;
use App\Http\Resources\Admin\UnivercityCourseResource;
use App\Models\Accommodation;
use App\Models\Availability;
use App\Models\City;
use App\Models\Extra;
use App\Models\Feature;
use App\Models\Language;
use App\Models\UnivercityCourse;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\Models\Media;

class UnivercityCourseApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('univercity_course_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UnivercityCourseResource(UnivercityCourse::with(['city', 'language', 'availability', 'extra', 'accommodation', 'features'])->advancedFilter());
    }

    public function store(StoreUnivercityCourseRequest $request)
    {
        $univercityCourse = UnivercityCourse::create($request->validated());
        $univercityCourse->availability()->sync($request->input('availability.*.id', []));
        $univercityCourse->extra()->sync($request->input('extra.*.id', []));
        $univercityCourse->accommodation()->sync($request->input('accommodation.*.id', []));
        $univercityCourse->features()->sync($request->input('features.*.id', []));
        if ($media = $request->input('photos', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $univercityCourse->id]);
        }

        if ($media = $request->input('featured_image', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $univercityCourse->id]);
        }

        return (new UnivercityCourseResource($univercityCourse))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('univercity_course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'city'          => City::get(['id', 'name']),
                'language'      => Language::get(['id', 'name']),
                'availability'  => Availability::get(['id', 'name']),
                'extra'         => Extra::get(['id', 'name']),
                'accommodation' => Accommodation::get(['id', 'name']),
                'features'      => Feature::get(['id', 'name']),
            ],
        ]);
    }

    public function show(UnivercityCourse $univercityCourse)
    {
        abort_if(Gate::denies('univercity_course_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UnivercityCourseResource($univercityCourse->load(['city', 'language', 'availability', 'extra', 'accommodation', 'features']));
    }

    public function update(UpdateUnivercityCourseRequest $request, UnivercityCourse $univercityCourse)
    {
        $univercityCourse->update($request->validated());
        $univercityCourse->availability()->sync($request->input('availability.*.id', []));
        $univercityCourse->extra()->sync($request->input('extra.*.id', []));
        $univercityCourse->accommodation()->sync($request->input('accommodation.*.id', []));
        $univercityCourse->features()->sync($request->input('features.*.id', []));
        $univercityCourse->updateMedia($request->input('photos', []), 'univercity_course_photos');
        $univercityCourse->updateMedia($request->input('featured_image', []), 'univercity_course_featured_image');

        return (new UnivercityCourseResource($univercityCourse))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(UnivercityCourse $univercityCourse)
    {
        abort_if(Gate::denies('univercity_course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new UnivercityCourseResource($univercityCourse->load(['city', 'language', 'availability', 'extra', 'accommodation', 'features'])),
            'meta' => [
                'city'          => City::get(['id', 'name']),
                'language'      => Language::get(['id', 'name']),
                'availability'  => Availability::get(['id', 'name']),
                'extra'         => Extra::get(['id', 'name']),
                'accommodation' => Accommodation::get(['id', 'name']),
                'features'      => Feature::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(UnivercityCourse $univercityCourse)
    {
        abort_if(Gate::denies('univercity_course_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $univercityCourse->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['univercity_course_create', 'univercity_course_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model         = new UnivercityCourse();
        $model->id     = $request->input('model_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));

        return response()->json($media, Response::HTTP_CREATED);
    }
}
