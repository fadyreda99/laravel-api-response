<?php

namespace fady\ApiResponse\Traits;

trait ResponseTrait
{
    protected function successResponse($data, $message = "Request succeeded", $code = 200, $pagination = null, $additionals = null)
    {
        $response = [
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ];

        if ($pagination !== null) {
            $response['pagination'] = $pagination;
        }

        if ($additionals !== null) {
            $response['additionals'] = $additionals;
        }

        return response()->json($response, $code);
    }

    protected function errorResponse($message = "Request failed", $code = 400, $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            // 'data' => $data,
        ], $code);
    }
}
