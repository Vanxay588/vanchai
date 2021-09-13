<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDownloadCategoryRequest;
use App\Http\Requests\UpdateDownloadCategoryRequest;
use App\Http\Resources\Admin\DownloadCategoryResource;
use App\Models\DownloadCategory;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DownloadCategoriesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('download_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DownloadCategoryResource(DownloadCategory::advancedFilter());
    }

    public function store(StoreDownloadCategoryRequest $request)
    {
        $downloadCategory = DownloadCategory::create($request->validated());

        return (new DownloadCategoryResource($downloadCategory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create(DownloadCategory $downloadCategory)
    {
        abort_if(Gate::denies('download_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(DownloadCategory $downloadCategory)
    {
        abort_if(Gate::denies('download_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DownloadCategoryResource($downloadCategory);
    }

    public function update(UpdateDownloadCategoryRequest $request, DownloadCategory $downloadCategory)
    {
        $downloadCategory->update($request->validated());

        return (new DownloadCategoryResource($downloadCategory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(DownloadCategory $downloadCategory)
    {
        abort_if(Gate::denies('download_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new DownloadCategoryResource($downloadCategory),
            'meta' => [],
        ]);
    }

    public function destroy(DownloadCategory $downloadCategory)
    {
        abort_if(Gate::denies('download_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $downloadCategory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
