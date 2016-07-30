<?php

namespace Drips\Less;

use Drips\Minimize\Compiler as MinimizeCompiler;
use Drips\MVC\CompileController;

define('DRIPS_LESS_DIRECTORY', (definied('DRIPS_DIRECTORY') ? DRIPS_DIRECTORY : __DIR__) . '/less');

class Controller extends CompileController
{
    protected $source_directory = DRIPS_LESS_DIRECTORY;
    protected $file_extension = "less";
    protected $response_type = "text/css";
    protected $minimize = true;

    public function compile($content)
    {
        $compiler = new LessCompiler;
        $compiler->setImportDir($this->source_directory);
        $compiled = $compiler->compile($content);
        if ($this->minimize) {
            $compiled = MinimizeCompiler::compile($compiled, MinimizeCompiler::CSS);
        }
        return $compiled;
    }
}
