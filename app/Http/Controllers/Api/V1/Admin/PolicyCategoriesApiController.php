<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePolicyCategoryRequest;
use App\Http\Requests\UpdatePolicyCategoryRequest;
use App\Http\Resources\Admin\PolicyCategoryResource;
use App\Models\PolicyCategory;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PolicyCategoriesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('policy_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PolicyCategoryResource(PolicyCategory::advancedFilter());
    }

    public function store(StorePolicyCategoryRequest $request)
    {
        $policyCategory = PolicyCategory::create($request->validated());

        return (new PolicyCategoryResource($policyCategory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create(PolicyCategory $policyCategory)
    {
        abort_if(Gate::denies('policy_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(PolicyCategory $policyCategory)
    {
        abort_if(Gate::denies('policy_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PolicyCategoryResource($policyCategory);
    }

    public function update(UpdatePolicyCategoryRequest $request, PolicyCategory $policyCategory)
    {
        $policyCategory->update($request->validated());

        return (new PolicyCategoryResource($policyCategory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(PolicyCategory $policyCategory)
    {
        abort_if(Gate::denies('policy_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new PolicyCategoryResource($policyCategory),
            'meta' => [],
        ]);
    }

    public function destroy(PolicyCategory $policyCategory)
    {
        abort_if(Gate::denies('policy_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $policyCategory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
