<?php
namespace MVC;


use APP\Lib\FrontController;


! defined("DS") ? define("DS", DIRECTORY_SEPARATOR, false) : null;


require_once ".." . DS . "app" . DS . "config" . DS . "config.php";
require_once APP_PATH . DS . "LIB" . DS . "autoload.php";


$frontController = new FrontController();

$frontController->dispatch();