<?php

namespace db;

class Conn
{
    public static function execute()
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
        if (!$conn) {
            die('连接失败'. mysqli_error($conn));
        }
        $sql="set names utf8";
        mysqli_query($conn,$sql);
        return $conn;
    }
}