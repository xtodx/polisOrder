<?php

namespace Xtodx\Polis\Models;

use Xtodx\Polis\PolisModel;

class Services extends PolisModel
{
    static $action = "services";

    static function list()
    {
        $data = self::sendRequest(self::$action);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }
}