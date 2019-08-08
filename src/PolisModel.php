<?php

namespace Xtodx\Polis;


class PolisModel
{

    private $action = "";
    /**
     * Model constructor.
     * @param bool $data
     */

    static protected function sendRequest($action, $method = "GET", $data = false, $status = 200)
    {

        try {
            $response = PolisOrder::$connector->sendRequest($action, $method, $data);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $response = $e->getResponse();
        }
        $response_status = $response->getStatusCode();
        $result = $response->getBody()->getContents();
        if ($response_status == $status || $response_status == 422) {
            $result = json_decode($result, 1);
            return $result;
        } elseif ($response_status == 404) {
            return false;
        } else {
            throw new PolisException('Polis returned a response with status code ' . $response->getStatusCode() . '(not ' . $status . ') and the following content ' . $result);
        }
    }

}