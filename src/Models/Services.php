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


    static function find($id)
    {
        $data = self::sendRequest(self::$action . "/sign/" . $id);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }

    static function fields($service)
    {

        $data = self::sendRequest(self::$action . "/fieldsBlock/" . $service);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }

    static function options($service)
    {
        $data = self::sendRequest(self::$action . "/options/" . $service);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }
}