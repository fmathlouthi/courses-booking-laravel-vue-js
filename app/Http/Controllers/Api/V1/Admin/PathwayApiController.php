<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePathwayRequest;
use App\Http\Requests\UpdatePathwayRequest;
use App\Http\Resources\Admin\PathwayResource;
use App\Models\Pathway;
use App\Models\PathwayUniversity;
use App\Models\SubjectPathway;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PathwayApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pathway_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PathwayResource(Pathway::with(['university','subjectPathway'])->advancedFilter());
    }

    public function store(StorePathwayRequest $request)
    {
        $pathway = Pathway::create($request->validated());

        return (new PathwayResource($pathway))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('pathway_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'university' => PathwayUniversity::get(['id', 'name']),
                'subjectpathway' => SubjectPathway::get(['id', 'name']),
                'type'       => Pathway::TYPE_SELECT,
            ],
        ]);
    }

    public function show(Pathway $pathway)
    {
        abort_if(Gate::denies('pathway_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PathwayResource($pathway->load(['university','subjectPathway']));
    }

    public function update(UpdatePathwayRequest $request, Pathway $pathway)
    {
        $pathway->update($request->validated());

        return (new PathwayResource($pathway))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Pathway $pathway)
    {
        abort_if(Gate::denies('pathway_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new PathwayResource($pathway->load(['university','subjectPathway'])),
            'meta' => [
                'university' => PathwayUniversity::get(['id', 'name']),
                'subjectpathway' => SubjectPathway::get(['id', 'name']),
                'type'       => Pathway::TYPE_SELECT,
            ],
        ]);
    }

    public function destroy(Pathway $pathway)
    {
        abort_if(Gate::denies('pathway_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pathway->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
