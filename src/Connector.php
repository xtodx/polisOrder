<?php


namespace Xtodx\Polis;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class Connector
{

    public function sendRequest($action = "", $method = "GET", $data = null)
    {
        if ($data && $method != "GET")
            $request = new Request($method, $this->host . $action, ['apiKey' => $this->key, 'Content-Type' => 'application/x-www-form-urlencoded', 'Accept' => 'application/json'], http_build_query($data, null, '&'));
        else {
            if ($data)
                $request = new Request($method, $this->host . $action . "?" . http_build_query($data), ['apiKey' => $this->key]);
            else
                $request = new Request($method, $this->host . $action, ['apiKey' => $this->key]);
        }
        $client = new Client();
        return $client->send($request);
    }

}