<?php

namespace Xtodx\Polis\Models;

use Xtodx\Polis\PolisModel;

class Models extends PolisModel
{
    static $action = "models";

    static function find($name, $mark = 0)
    {
        $data = self::sendRequest(self::$action . "/?name=" . $name . "&mark_id=" . $mark);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }

}
