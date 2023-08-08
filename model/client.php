<?php

namespace Geekstore;

require 'Db_connection.php';

use Geekstore\DB_connection;


class Client
{
    private $mysqli;

    public function __construct()
    {
        $dbConnection = new Db_connection();
        $this->mysqli = $dbConnection->database_connection();
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = sha1(md5($_POST['password']));
            $stmt = $this->mysqli->prepare("SELECT email, password, client_id FROM clients WHERE email=? AND password=?");
            $stmt->bind_param('ss', $email, $password);
            $stmt->execute();
            $stmt->bind_result($email, $password, $client_id);
            $rs = $stmt->fetch();
            if ($rs) {
                $_SESSION['client_id'] = $client_id;
            }
            return ($rs);
        }
        return null;
    }

    public function checklogin()
    {
        if (strlen($_SESSION['client_id']) == 0) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = "index.php?page=login";
            $_SESSION["client_id"] = "";
            header("Location: http://$host$uri/$extra");
        }
    }

    




}