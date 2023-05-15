<?php
//function autoload_controller($class_name) {
//    $file_name = APP_DIR . '/controllers/' . str_replace('\\', '/', $class_name) . '.php';
////    $file_name = '/control/' . str_replace('\\', '/', $class_name) . '.php';
////    var_dump($file_name);
//    if (file_exists($file_name)) {
//        require_once $file_name;
//    }
//}
//function autoload_class($class_name) {
//    $file_name = CORE_DIR . '/http/' . str_replace('\\', '/', $class_name) . '.php';
////    $file_name = '/control/' . str_replace('\\', '/', $class_name) . '.php';
////    var_dump($file_name);
//    if (file_exists($file_name)) {
//        require_once $file_name;
//    }
//}
//function autoload_controller_interface($class_name) {
//    $file_name = CORE_DIR . '/controller/' . str_replace('\\', '/', $class_name) . '.php';
////    $file_name = '/control/' . str_replace('\\', '/', $class_name) . '.php';
////    var_dump($file_name);
//    if (file_exists($file_name)) {
//        require_once $file_name;
//    }
//}
//spl_autoload_register('autoload_controller_interface');
//spl_autoload_register('autoload_http');
//spl_autoload_register('autoload_controller');
function autoload_class($class_name)
{
    $file_name = ROOT_DIR . '/' . str_replace('\\', '/', $class_name) . '.php';
//    $file_name = '/control/' . str_replace('\\', '/', $class_name) . '.php';
//    var_dump($file_name);
    if (file_exists($file_name)) {
        require_once $file_name;
    }
}
spl_autoload_register('autoload_class');