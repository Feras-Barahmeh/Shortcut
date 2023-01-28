<?php

namespace APP\Lib;

class FrontController {

    const NOT_FOUND_ACTION = "notFoundAction";
    const NOT_FOUND_CONTROLLER = "APP\Controllers\NotFoundController";
    private $_controller = "index";
    private $_action = "default";
    private $_params = [];

    public function __construct()
    {
        $this->_parseURL();
    }

    private function _parseURL()
    {
        $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $url = explode('/', trim($url, '/'), 3);

        // Split Values
        $this->setController($url[0]);
        $this->setAction(@$url[1]);
        $this->setParams(@$url[2]);
    }

    public function dispatch()
    {
        $controllerClassName = "APP\Controllers\\" . ucfirst($this->_controller) . "Controller";
        $actionName          = $this->_action . "Action";

        if (! class_exists($controllerClassName)) {
            $controllerClassName = self::NOT_FOUND_CONTROLLER;
        }

        $controller = new $controllerClassName();

        if (! method_exists($controller, $actionName)) {
            $this->_action = $actionName = self::NOT_FOUND_ACTION;
        }


        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setParams($this->_params);
        $controller->$actionName();
    }

    /**
     * @param mixed $controller
     */
    public function setController($controller)
    {
        if (isset($controller) && $controller) {
            $this->_controller = $controller;
        }
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        if (isset($action) && $action) {
            $this->_action = $action;
        }
    }

    /**
     * @param mixed $params
     */
    public function setParams($params)
    {
        if (isset($params) && $params) {
            $this->_params = explode('/', trim($params, '/'));
        }
    }
}