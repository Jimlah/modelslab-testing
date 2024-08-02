<?php

namespace App\Http\Apis\V1;

use App\Contract\BaseApi;
use App\Contract\DeepfakeContract;
use App\Pipes\RecordImageResponse;
use App\Pipes\SendWebhook;
use App\Pipes\TransformDeepfakeResponse;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class Deepfake extends BaseApi implements DeepfakeContract
{
    public function initialize(): PendingRequest
    {
        return Http::baseUrl('https://hphe6u3uagd6fj-3754.proxy.runpod.net')
            ->withHeaders(['Content-Type' => 'application/x-www-form-urlencoded'])
            ->asForm();
    }

    /**
     * @throws ConnectionException
     */
    public function fetch(mixed $id): Collection
    {
        return $this->request->get("get_queued_response/{$id}")->collect();
    }

    /**
     * @throws ConnectionException
     */
    public function swapFaceSingle(array $data): Collection
    {
        $response = $this->request
            ->post('/swap-face-single', $data);

        return app(Pipeline::class)
            ->send($response)
            ->through([
                RecordImageResponse::class,
                SendWebhook::class,
                TransformDeepfakeResponse::class,
            ])->thenReturn();
    }

    /**
     * @throws ConnectionException
     */
    public function swapFaceMultiple(array $data): Collection
    {
        $response = $this->request
            ->post('/swap-face-multiple', $data);

        return app(Pipeline::class)
            ->send($response)
            ->through([
                RecordImageResponse::class,
                SendWebhook::class,
                TransformDeepfakeResponse::class,
            ])->thenReturn();
    }

    /**
     * @throws ConnectionException
     */
    public function swapImageToVideo(array $data): Collection
    {
        $response = $this->request
            ->post('/swap_img_to_video', $data);

        return app(Pipeline::class)
            ->send($response)
            ->through([
                RecordImageResponse::class,
                SendWebhook::class,
                TransformDeepfakeResponse::class,
            ])->thenReturn();
    }

    /**
     * @throws ConnectionException
     */
    public function swapVideoToSpecific(array $data): Collection
    {
        $response = $this->request
            ->post('/swap_specific_img_to_video', $data);

        return app(Pipeline::class)
            ->send($response)
            ->through([
                RecordImageResponse::class,
                SendWebhook::class,
                TransformDeepfakeResponse::class,
            ])->thenReturn();
    }
}
