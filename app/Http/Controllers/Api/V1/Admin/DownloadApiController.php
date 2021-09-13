<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDownloadRequest;
use App\Http\Requests\UpdateDownloadRequest;
use App\Http\Resources\Admin\DownloadResource;
use App\Models\Download;
use App\Models\DownloadCategory;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DownloadApiController extends Controller
{
    public function index()
    {

        return new DownloadResource(Download::with(['categories'])->advancedFilter());
    }

    public function store(StoreDownloadRequest $request)
    {
        $download = Download::create($request->validated());

        if ($media = $request->input('download', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $download->id]);
        }

        if ($media = $request->input('photo', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $download->id]);
        }

        return (new DownloadResource($download))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create(Download $download)
    {
        abort_if(Gate::denies('download_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'categories' => DownloadCategory::get(['id', 'categories']),
            ],
        ]);
    }

    public function show(Download $download)
    {
        abort_if(Gate::denies('download_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DownloadResource($download->load(['categories']));
    }

    public function update(UpdateDownloadRequest $request, Download $download)
    {
        $download->update($request->validated());

        $download->updateMedia($request->input('download', []), 'download_download');
        $download->updateMedia($request->input('photo', []), 'download_photo');

        return (new DownloadResource($download))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Download $download)
    {
        abort_if(Gate::denies('download_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new DownloadResource($download->load(['categories'])),
            'meta' => [
                'categories' => DownloadCategory::get(['id', 'categories']),
            ],
        ]);
    }

    public function destroy(Download $download)
    {
        abort_if(Gate::denies('download_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $download->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['download_create', 'download_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model         = new Download();
        $model->id     = $request->input('model_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));

        return response()->json($media, Response::HTTP_CREATED);
    }
}
