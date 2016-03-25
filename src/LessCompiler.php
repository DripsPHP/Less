<?php

namespace Drips\LessCompiler;

use Drips\Utils\ICompiler;
use lessc;

class LessCompiler implements ICompiler
{
    public static function compile($string){
        $less = new lessc;
        return $less->compile($string);
    }
}
