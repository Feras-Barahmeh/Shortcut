<?php

// APP Data Types

enum TypeDriver : int {
    case pdo = 1;
    case mysql = 2;
}


! defined("DS") ? define("DS", DIRECTORY_SEPARATOR) : null;


// Start Paths Constants
define("APP_PATH", realpath(dirname(dirname(__FILE__))));

const TEMPLATE_PATH = APP_PATH . DS . 'template' . DS;
const CSS = DS . "css" . DS;


// End Paths Constants

const VIEWS_PATH = APP_PATH . DS . "views" . DS;

// Database Credentials
defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', '');
defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'pdo');
defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', TypeDriver::pdo);
