<?php

namespace Utils;

class RequestException extends \Exception {}

class Request
{
    public static $timeout = 5;

    public static function GET($url, $params = []): string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . ($params ? "?" : "") . http_build_query($params));
        curl_setopt($ch, CURLOPT_TIMEOUT, self::$timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($ch);
        curl_close($ch);
        return $resp;
    }

    public static function POST($url, $params = "", $headers = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, self::$timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $resp = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new RequestException(curl_error($ch));
        }
        curl_close($ch);
        return $resp;
    }

    public static function POSTJson($url, $body = [], $headers = [])
    {
        return self::POST($url, json_encode($body), array_merge(["Content-Type: application/json"], $headers));
    }
}
