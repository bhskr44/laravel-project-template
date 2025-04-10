<?php

namespace App\Services;

class ResponseService
{
    /**
     * Generate a successful response.
     *
     * @param  mixed  $data
     * @param  string  $message
     * @param  int  $httpStatusCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function success($data, string $message = "Request was successful.", int $httpStatusCode = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => is_array($data) || is_object($data) ? $data : ['value' => $data],
        ], $httpStatusCode);
    }

    /**
     * Generate a failure response.
     *
     * @param  mixed  $errors
     * @param  string  $message
     * @param  int  $httpStatusCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function failure($data, string $message = "An error occurred.", int $httpStatusCode = 400)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => is_array($data) || is_object($data) ? $data : ['value' => $data],
        ], $httpStatusCode);
    }
}
