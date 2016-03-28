<?php

namespace Drips\LessCompiler;

use Drips\Utils\ICompiler;
use lessc;

class LessCompiler implements ICompiler
{
    private static $compiler;

    public static function compile($string)
    {
        if(static::$compiler == null){
            static::$compiler = new lessc;
        }

        return static::$compiler->compile($string);
    }
}
