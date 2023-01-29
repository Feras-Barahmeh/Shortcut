<?php

namespace APP\Controllers;

use APP\Lib\FrontController;

abstract class AbstractController {

    protected $_controller;
    protected $_action;
    protected $_params;

    public $_info;

    public function notFoundAction(): void
    {
        $this->_renderView();
    }

    protected function _renderView($extract=false): void
    {

        if ($this->_action == FrontController::NOT_FOUND_ACTION) {
            require_once VIEWS_PATH ."notfound" . DS . "notfound.view.php";
        } else {
            $view = VIEWS_PATH .$this->_controller . DS . $this->_action . ".view.php";

            if (file_exists($view)) {
                if ($extract) extract($this->_info);
                require_once TEMPLATE_PATH . "templateheaderstart.php";
                require_once TEMPLATE_PATH . "templateheaderend.php";
                require_once TEMPLATE_PATH . "header.php";
                require_once TEMPLATE_PATH . "wrapperstart.php";
                require_once TEMPLATE_PATH . "nav.php";
                require_once $view;
                require_once TEMPLATE_PATH . "wrapperend.php";
                require_once TEMPLATE_PATH . "tempaltefooter.php";
            } else {
                require_once VIEWS_PATH ."notfound" . DS . "notview.view.php";
            }
        }
    }


    public function setController(mixed $controller): void
    {
        $this->_controller = $controller;
    }


    public function setAction(mixed $action): void
    {
        $this->_action = $action;
    }


    public function setParams(mixed $params): void
    {
        $this->_params = $params;
    }
}