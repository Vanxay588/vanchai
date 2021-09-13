<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExaminationResultRequest;
use App\Http\Requests\UpdateExaminationResultRequest;
use App\Http\Resources\Admin\ExaminationResultResource;
use App\Models\ExaminationResult;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ExaminationResultsApiController extends Controller
{
    public function index()
    {
        return new ExaminationResultResource(ExaminationResult::advancedFilter());
    }

    public function store(StoreExaminationResultRequest $request)
    {
        $examinationResult = ExaminationResult::create($request->validated());

        if ($media = $request->input('examination_result', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $examinationResult->id]);
        }

        return (new ExaminationResultResource($examinationResult))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('examination_result_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(ExaminationResult $examinationResult)
    {
        abort_if(Gate::denies('examination_result_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ExaminationResultResource($examinationResult);
    }

    public function update(UpdateExaminationResultRequest $request, ExaminationResult $examinationResult)
    {
        $examinationResult->update($request->validated());

        $examinationResult->updateMedia($request->input('examination_result', []), 'examination_result_examination_result');

        return (new ExaminationResultResource($examinationResult))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(ExaminationResult $examinationResult)
    {
        abort_if(Gate::denies('examination_result_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new ExaminationResultResource($examinationResult),
            'meta' => [],
        ]);
    }

    public function destroy(ExaminationResult $examinationResult)
    {
        abort_if(Gate::denies('examination_result_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examinationResult->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['examination_result_create', 'examination_result_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model         = new ExaminationResult();
        $model->id     = $request->input('model_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));

        return response()->json($media, Response::HTTP_CREATED);
    }
}
