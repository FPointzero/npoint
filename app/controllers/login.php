<?php

namespace app\controllers;

use \core\controller\Controller;
use db\Conn;

class login implements Controller
{
    public static function execute()
    {
        // 连接数据库
        $conn = Conn::execute();
        if (!self::check_login_status()) {
            $_SESSION['username'] = $_POST['username'];
        }
        return ["msg" => true, "username" => $_SESSION['username']];
    }

    public static function check_login_status()
    {
        if (isset($_SESSION['username'])) {
            return true;
        }
        return false;
    }
}