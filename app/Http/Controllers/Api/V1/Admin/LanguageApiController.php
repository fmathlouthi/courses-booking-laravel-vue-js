<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Http\Resources\Admin\LanguageResource;
use App\Models\Language;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LanguageApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('language_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LanguageResource(Language::advancedFilter());
    }

    public function store(StoreLanguageRequest $request)
    {
        $language = Language::create($request->validated());

        return (new LanguageResource($language))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('language_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'status' => Language::STATUS_SELECT,
            ],
        ]);
    }

    public function show(Language $language)
    {
        abort_if(Gate::denies('language_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LanguageResource($language);
    }

    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $language->update($request->validated());

        return (new LanguageResource($language))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Language $language)
    {
        abort_if(Gate::denies('language_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new LanguageResource($language),
            'meta' => [
                'status' => Language::STATUS_SELECT,
            ],
        ]);
    }

    public function destroy(Language $language)
    {
        abort_if(Gate::denies('language_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $language->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
