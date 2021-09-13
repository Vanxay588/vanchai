<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePolicyRequest;
use App\Http\Requests\UpdatePolicyRequest;
use App\Http\Resources\Admin\PolicyResource;
use App\Models\Policy;
use App\Models\PolicyCategory;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PolicyApiController extends Controller
{
    public function index()
    {

        return new PolicyResource(Policy::with(['categories'])->advancedFilter());
    }

    public function store(StorePolicyRequest $request)
    {
        $policy = Policy::create($request->validated());

        if ($media = $request->input('policy', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $policy->id]);
        }

        return (new PolicyResource($policy))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create(Policy $policy)
    {
        abort_if(Gate::denies('policy_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'categories' => PolicyCategory::get(['id', 'categories']),
            ],
        ]);
    }

    public function show(Policy $policy)
    {
        abort_if(Gate::denies('policy_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PolicyResource($policy->load(['categories']));
    }

    public function update(UpdatePolicyRequest $request, Policy $policy)
    {
        $policy->update($request->validated());

        $policy->updateMedia($request->input('policy', []), 'policy_policy');

        return (new PolicyResource($policy))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Policy $policy)
    {
        abort_if(Gate::denies('policy_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new PolicyResource($policy->load(['categories'])),
            'meta' => [
                'categories' => PolicyCategory::get(['id', 'categories']),
            ],
        ]);
    }

    public function destroy(Policy $policy)
    {
        abort_if(Gate::denies('policy_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $policy->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['policy_create', 'policy_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model         = new Policy();
        $model->id     = $request->input('model_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));

        return response()->json($media, Response::HTTP_CREATED);
    }
}
