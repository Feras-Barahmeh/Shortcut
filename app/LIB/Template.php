<?php

namespace APP\LIB;

class Template
{
    private $_templateParts;
    private $_actionView;
    private $_info;

    public function __construct(array $templateParts)
    {
        $this->_templateParts = $templateParts;
    }

    public function setActionViewFile($file): void
    {
        $this->_actionView = $file;
    }

    private function setTemplateHeaderStart(): void
    {
        require_once TEMPLATE_PATH . "templateheaderstart.php";
    }

    private function setTemplateHeaderEnd(): void
    {
        require_once TEMPLATE_PATH . "templateheaderend.php";
    }
    private function ifKeyTemplatePartExist($nameKey): bool
    {
        return array_key_exists($nameKey, $this->_templateParts);
    }

    private function requireFiles($parts): void
    {

        extract($this->_info);
        foreach ($parts as $partKey => $partValue) {
            if ($partKey === NAME_VIEW_TEMPLATE_KEY)
                require_once $this->_actionView;
            else
                require_once $partValue;
        }
    }
    private function renderTemplateFiles(): void
    {
        if ($this->ifKeyTemplatePartExist(NAME_TEMPLATE_BLOCK_KEY)) {
            $parts = $this->_templateParts[NAME_TEMPLATE_BLOCK_KEY];

            if(! empty($parts)) {

                $this->requireFiles($parts);
            }

        } else {
            trigger_error("Name Template Key Not Found", E_USER_WARNING);
        }
    }

    private function generateLinksTags($resources, &$links, $type="css"): void
    {
        if (!empty($resources)) {
            foreach ($resources as $resourceKey => $resourceValue) {
                if ($type === "css")
                    $links .=  '<link rel="stylesheet" href="' . $resourceValue .'">';
                else
                    $links .= '<script src="' . $resourceValue. '" ></script>';
            }
        }
    }


    private function renderHeaderResources(): void
    {
        if ($this->ifKeyTemplatePartExist(NAME_TEMPLATE_HEADER_RESOURCES)) {
            $resources = $this->_templateParts[NAME_TEMPLATE_HEADER_RESOURCES];
            $links = '';
            if(! empty($resources)) {
                // Generate CSS Files
                $css = $resources["css"];
                $this->generateLinksTags($css, $links, "css");

                // Generate JS Links
                $js = $resources["js"];
                $this->generateLinksTags($js, $links, "js");
            }
            echo $links;

        }
        else {
            trigger_error("Name Template Key Not Found ( " . NAME_TEMPLATE_HEADER_RESOURCES . ')', E_USER_WARNING);
        }
    }

    private function renderFooterResources(): void
    {
        if ($this->ifKeyTemplatePartExist(NAME_TEMPLATE_FOOTER_RESOURCES)) {
            $resources = $this->_templateParts[NAME_TEMPLATE_FOOTER_RESOURCES];
            $tags = '';
            if (! empty($resources)) {
                $js = $resources["js"];
                $this->generateLinksTags($js, $tags,  "js");
            }

            echo $tags;
        }
        else {
            trigger_error("Name Template Key Not Found ( " . NAME_TEMPLATE_FOOTER_RESOURCES . ')', E_USER_WARNING);
        }
    }

    private function setTemplateFooter(): void
    {
        require_once TEMPLATE_PATH . "tempaltefooter.php";
    }
    public function renderFiles(): void
    {

//        extract($this->_info);
        $this->setTemplateHeaderStart();
        $this->renderHeaderResources();
        $this->setTemplateHeaderEnd();
        $this->renderTemplateFiles();
        $this->renderFooterResources();
        $this->setTemplateFooter();
    }

    public function setData($data): void
    {
        $this->_info = $data;
    }
}