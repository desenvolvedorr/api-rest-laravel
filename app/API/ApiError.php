<?php

namespace \app\API;

class ApiError
{
    public static function errorMessage($message, $code)
    {
        return [
            'data' => [
                'msg' => $message,
                'code' => $code
            ]
        ];
    }
}