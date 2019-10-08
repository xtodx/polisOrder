<?php

namespace Xtodx\Polis\Models;

use Xtodx\Polis\PolisModel;

class Cities extends PolisModel
{
    static $action = "cities";

    static function find($name)
    {
        $data = self::sendRequest(self::$action."/?name=".$name);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }

}