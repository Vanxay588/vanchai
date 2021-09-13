<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStatisticRequest;
use App\Http\Requests\UpdateStatisticRequest;
use App\Http\Resources\Admin\StatisticResource;
use App\Models\Statistic;
use App\Models\StatisticCategory;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class StatisticApiController extends Controller
{
    public function index()
    {

        return new StatisticResource(Statistic::with(['categories'])->advancedFilter());
    }

    public function store(StoreStatisticRequest $request)
    {
        $statistic = Statistic::create($request->validated());

        if ($media = $request->input('statistic', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $statistic->id]);
        }

        return (new StatisticResource($statistic))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('statistic_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'categories' => StatisticCategory::get(['id', 'categories']),
            ],
        ]);
    }

    public function show(Statistic $statistic)
    {
        abort_if(Gate::denies('statistic_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StatisticResource($statistic->load(['categories']));
    }

    public function update(UpdateStatisticRequest $request, Statistic $statistic)
    {
        $statistic->update($request->validated());

        $statistic->updateMedia($request->input('statistic', []), 'statistic_statistic');

        return (new StatisticResource($statistic))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Statistic $statistic)
    {
        abort_if(Gate::denies('statistic_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new StatisticResource($statistic->load(['categories'])),
            'meta' => [
                'categories' => StatisticCategory::get(['id', 'categories']),
            ],
        ]);
    }

    public function destroy(Statistic $statistic)
    {
        abort_if(Gate::denies('statistic_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statistic->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['statistic_create', 'statistic_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model         = new Statistic();
        $model->id     = $request->input('model_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));

        return response()->json($media, Response::HTTP_CREATED);
    }
}