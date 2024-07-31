<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Apis\V1\AiAgent;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\AiAgentFetchRequest;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AiAgentController extends Controller
{
    /**
     * @throws ConnectionException
     */
    public function aiAgent(AiAgentFetchRequest $request, AiAgent $aiAgent): JsonResponse
    {
        $data = $aiAgent->aiAgent($request->validated());
        dd($data);
        return response()->json([
            'status' => 'success',
            'message' => 'AI agent response retrieved successfully',
            'data' => $data,
        ]);
    }

    /**
     * @throws ConnectionException
     */
    public function fetch(Request $request, AiAgent $aiAgent): JsonResponse
    {
        $data = $aiAgent->fetch($request->id);
        dd($data);
        return response()->json([
            'status' => 'success',
            'message' => 'AI agent response retrieved successfully',
            'data' => $data,
        ]);
    }
}
