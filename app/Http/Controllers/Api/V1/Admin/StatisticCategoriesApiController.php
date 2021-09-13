<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStatisticCategoryRequest;
use App\Http\Requests\UpdateStatisticCategoryRequest;
use App\Http\Resources\Admin\StatisticCategoryResource;
use App\Models\StatisticCategory;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StatisticCategoriesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('statistic_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StatisticCategoryResource(StatisticCategory::advancedFilter());
    }

    public function store(StoreStatisticCategoryRequest $request)
    {
        $statisticCategory = StatisticCategory::create($request->validated());

        return (new StatisticCategoryResource($statisticCategory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('statistic_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(StatisticCategory $statisticCategory)
    {
        abort_if(Gate::denies('statistic_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StatisticCategoryResource($statisticCategory);
    }

    public function update(UpdateStatisticCategoryRequest $request, StatisticCategory $statisticCategory)
    {
        $statisticCategory->update($request->validated());

        return (new StatisticCategoryResource($statisticCategory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(StatisticCategory $statisticCategory)
    {
        abort_if(Gate::denies('statistic_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new StatisticCategoryResource($statisticCategory),
            'meta' => [],
        ]);
    }

    public function destroy(StatisticCategory $statisticCategory)
    {
        abort_if(Gate::denies('statistic_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statisticCategory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
