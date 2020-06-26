<?php

namespace Xtodx\Polis\Models;

use Xtodx\Polis\PolisModel;

class Number extends PolisModel
{
    static $action = "number";

    static function find($number)
    {
        $data = self::sendRequest(self::$action . "/" . $number);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }
}
