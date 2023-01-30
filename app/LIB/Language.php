<?php
namespace APP\LIB;

use function APP\pr;

class Language
{
    private string $_path;
    private array $_dictionary = [];
    private function handlerPathLanguage($path): string
    {
        return str_replace('.', DS, $path) . ".lang.php";
    }

    private function ifFileLangExist(): bool
    {
        $this->_path = LANGUAGES_PATH . APP_DEFAULT_LANGUAGE . DS . $this->handlerPathLanguage($this->_path);
        return file_exists($this->_path);
    }

    private function setPath($path): void
    {
        $this->_path = $path;
    }

    private function setContent($content): void
    {
        foreach ($content as $key => $value) {
            $this->_dictionary[$key] = $value;
        }
    }
    public function load($dirAndAction): void
    {
        $this->setPath($dirAndAction);
        if ($this->ifFileLangExist()) {
            require $this->_path;
            // Set Content
            if(isset($content) && is_array($content))
                $this->setContent($content);
        } else {
            trigger_error("File Language Not Exist {$this->_path}",  E_USER_WARNING);
        }
    }
    public function getDictionary(): array
    {
        return $this->_dictionary;
    }

}