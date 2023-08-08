<?php

namespace Geekstore;

require_once 'DB_connection';

use Geekstore\DB_connection;

class shop
{
    private $mysqli;

    public function __construct()
    {
        $dbConnection = new DB_connection();
        $this->mysqli = $dbConnection->database_connection();
    }

    public function getshopSettings()
    {
        $ret = "SELECT * FROM `shop` ";
        $stmt = $this->mysqli->prepare($ret);
        $stmt->execute();
        $res = $stmt->get_result();
        return $res;
    }
}