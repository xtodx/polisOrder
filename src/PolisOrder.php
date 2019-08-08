<?php


namespace Xtodx\Polis;


class PolisOrder
{
    static $connector;
    private $host, $key;


    private function __construct($key, $host)
    {
        $this->key = $key;
        $this->host = $host;
    }

}