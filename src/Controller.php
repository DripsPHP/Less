<?php

namespace Drips\LessCompiler;

use Drips\MVC\CompileController;

class Controller extends CompileController
{
    protected $source_directory = "less";
    protected $file_extension = "less";
    protected $response_type = "text/css";

    public function compile($content)
    {
        $compiler = new LessCompiler;
        $compiler->setImportDir($this->source_directory);
        return $compiler->compile($content);
    }
}
