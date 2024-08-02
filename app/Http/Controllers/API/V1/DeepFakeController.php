<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Apis\V1\Deepfake;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\DeepFakeSingleSwapRequest;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Pipeline;

class DeepFakeController extends Controller
{
    public function __construct(
        public Deepfake $service
    ) {}

    /**
     * @throws ConnectionException
     */
    public function singleFaceSwap(DeepFakeSingleSwapRequest $request, Pipeline $pipeline): JsonResponse
    {
        $data = $this->service->swapFaceSingle($request->validated());

        return response()->json($data);
    }
}
