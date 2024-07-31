<?php

namespace App\Http\Apis\V1;

use App\Contract\ApiContract;
use App\Contract\DeepfakeContract;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class Deepfake extends ApiContract implements DeepfakeContract
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
    public function swapFaceSingle(array $data):Collection
    {
        return $this->request
            ->post('/swap-face-single', $data)
            ->collect();
    }

    /**
     * @throws ConnectionException
     */
    public function swapFaceMultiple(array $data):Collection
    {
        return $this->request
            ->post('/swap-face-multiple', $data)
            ->collect();
    }

    /**
     * @throws ConnectionException
     */
    public function swapImageToVideo(array $data):Collection
    {
        return $this->request
            ->post('/swap_img_to_video', $data)
            ->collect();
    }

    /**
     * @throws ConnectionException
     */
    public function swapVideoToSpecific(array $data): Collection
    {
        return $this->request
            ->post('/swap_specific_img_to_video', $data)
            ->collect();
    }
}
