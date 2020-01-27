<?php

namespace Xtodx\Polis\Models;

use Xtodx\Polis\PolisModel;

class Cities extends PolisModel
{
    static $action = "cities";

    static function search($name)
    {
        $data = self::sendRequest(self::$action."/?name=".$name);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }
    static function аштв($id)
    {
        $data = self::sendRequest(self::$action."/".$id);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }

}
