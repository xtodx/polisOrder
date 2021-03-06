<?php

namespace Xtodx\Polis\Models;

use Xtodx\Polis\PolisModel;

class Orders extends PolisModel
{
    static $action = "orders";

    static function create($data)
    {
        $data = self::sendRequest(self::$action, "POST", $data);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }

    static function update($id, $data)
    {
        $data = self::sendRequest(self::$action . "/fill/" . $id, "PUT", $data);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }

    static function phone($id, $phone)
    {
        $data = self::sendRequest(self::$action . "/fill_phone/" . $id, "POST", ['phone'=>$phone]);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }


    static function fill($id)
    {
        $data = self::sendRequest(self::$action . "/fill/" . $id);
        if ($data['data']) {
            return $data['data'];
        } else {
            return false;
        }
    }

    static function sendMail($id)
    {
        $data = self::sendRequest(self::$action . "/sendMail/" . $id, "POST");
        if ($data['status']) {
            return true;
        } else {
            return false;
        }
    }
}