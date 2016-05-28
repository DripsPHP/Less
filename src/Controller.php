<?php

namespace Drips\LessCompiler;

use Drips\MVC\CompileController;
use Drips\MinimizeCompiler\MinimizeCompiler;

class Controller extends CompileController
{
    protected $source_directory = "less";
    protected $file_extension = "less";
    protected $response_type = "text/css";
    protected $minimize = true;

    public function compile($content)
    {
        $compiler = new LessCompiler;
        $compiler->setImportDir($this->source_directory);
        $compiled = $compiler->compile($content);
        if($this->minimize){
            $compiled = MinimizeCompiler::compile($compiled, MinimizeCompiler::CSS);
        }
        return $compiled;
    }
}
