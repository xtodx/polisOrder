<?php

namespace Xtodx\Polis\Models;

use Xtodx\Polis\PolisModel;

class Offers extends PolisModel
{
    static $action = "offers";

    static function list($service, $options)
    {
        $data = self::sendRequest(self::$action . "/" . $service, "GET", ["options" => $options]);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }
}