<?php

namespace App\Http\Apis\V1;

use App\Contract\AiAgentContract;
use App\Contract\ApiContract;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class AiAgent extends ApiContract implements AiAgentContract
{
    /**
     * @throws ConnectionException
     */
    public function aiAgent(array $data): Collection
    {
       return $this->request
            ->post('/run', $data)
       ->collect();
	}

    /**
     * @throws ConnectionException
     */
    public function fetch($id): Collection
    {
		return $this->request->get("get_queued_response/{$id}")->collect();
	}

	public function initialize(): PendingRequest
	{
        return Http::baseUrl('https://zah2j4mojqwhgf-3754.proxy.runpod.net/');
	}
}
