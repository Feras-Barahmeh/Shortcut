<?php
namespace MVC;


use APP\Lib\FrontController;
use APP\LIB\Template;


! defined("DS") ? define("DS", DIRECTORY_SEPARATOR) : null;


require_once ".." . DS . "app" . DS . "config" . DS . "config.php";
require_once APP_PATH . DS . "LIB" . DS . "autoload.php";
$templateParts = require_once ".." . DS . "app" . DS . "config" . DS . "templateconfig.php";

$template = new Template($templateParts);

$frontController = new FrontController($template);

$frontController->dispatch();