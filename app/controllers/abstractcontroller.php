<?php

namespace APP\Controllers;

use APP\Lib\FrontController;
use function APP\pr;


abstract class AbstractController {
    protected $_controller;
    protected $_action;
    protected $_params;
    public $_info = [];
    protected $_template;
    protected $_language;

    public function notFoundAction(): void
    {
        $this->_renderView();
    }
    private function mergeInfo(): void
    {
        $dictionaryLanguage = $this->_language->getDictionary();
        if (isset($dictionaryLanguage) && !empty($dictionaryLanguage))
            $this->_info = array_merge($this->_info, $dictionaryLanguage);
    }
    protected function _renderView(): void
    {
        if ($this->_action == FrontController::NOT_FOUND_ACTION) {
            require_once VIEWS_PATH ."notfound" . DS . "notfound.view.php";
        } else {
            $view = VIEWS_PATH .$this->_controller . DS . $this->_action . ".view.php";

            if (file_exists($view)) {
                $this->mergeInfo();
                $this->_template->setActionViewFile($view);
                $this->_template->setData($this->_info);
                $this->_template->renderFiles();
            } else {
                require_once VIEWS_PATH ."notfound" . DS . "notview.view.php";
            }
        }
    }
    public function setTemplate($tem): void
    {
        $this->_template = $tem;
    }
    public function setLanguage($lang): void
    {
        $this->_language = $lang;
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