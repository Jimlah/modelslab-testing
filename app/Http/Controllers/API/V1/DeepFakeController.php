<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Apis\V1\Deepfake;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\DeepFakeSingleSwapRequest;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeepFakeController extends Controller
{
    /**
     * @throws ConnectionException
     */
    public function singleFaceSwap(DeepFakeSingleSwapRequest $request, Deepfake $service): JsonResponse
    {

        $data = $service->swapFaceSingle($request->validated());
        if ($data->get('status') === 'success') {
            return response()->json([
                'status' => 'success',
                'message' => 'Face swap queued successfully',
                'data' => $data,
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Face swap failed',
            'data' => $data,
        ], 400);
    }
}
