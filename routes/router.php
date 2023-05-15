<?php
// 导入定义路由映射关系的自定义函数库
require_once CORE_DIR . "/http/handler.php";

// 定义路由映射关系
get("/api/index", function () {
    echo app\controllers\index::execute();
});

post("/api/login", function () {
    echo json_encode(app\controllers\login::execute());
});

// 处理路由
require_once "handler.php";