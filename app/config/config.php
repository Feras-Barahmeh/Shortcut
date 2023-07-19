<?php

enum TypeDriver : int
{
    case pdo = 1;
    case mysql = 2;
}

define("APP_PATH", realpath(dirname(__FILE__, 2)));
const VIEWS_PATH = APP_PATH . DS . "views" . DS;

const TEMPLATE_PATH = APP_PATH . DS . 'templates' . DS;

const CSS = DS . "css" . DS;

const JS  = DS . "js" . DS;

const NAME_TEMPLATE_HEADER_RESOURCES = "header_resources";
const NAME_TEMPLATE_FOOTER_RESOURCES = "footer_resources";

// Cookie configuration
const COOKIE_PATH= '/';

// Start Languages Paths
if (isset($_COOKIE["lang"])) {
    define("APP_DEFAULT_LANGUAGE", $_COOKIE["lang"]);
} else {
    define("APP_DEFAULT_LANGUAGE", "en");
}
const LANGUAGES_PATH = APP_PATH . DS . "languages" . DS;

// Salts
const MAIN_SALT = '$2a$07$yeNCSNwRpYopOhv0TrrReP$';


// Database Credentials
defined('DATABASE_HOST_NAME')           ?
    null : define ('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')           ?
    null : define ('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD')            ?
    null : define ('DATABASE_PASSWORD', '');
defined('DATABASE_DB_NAME')              ?
    null : define ('DATABASE_DB_NAME', 'pos');
defined('DATABASE_PORT_NUMBER')     ?
    null : define ('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')       ?
    null : define ('DATABASE_CONN_DRIVER',  TypeDriver::pdo);