<?php

namespace tests;

use Drips\Less\Compiler;
use PHPUnit_Framework_TestCase;

class LessCompilerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dateProvider
     */
    public function testLessCompiler($less, $css)
    {
        $compiler = new Compiler;
        $this->assertEquals($compiler->compile($less), $css);
    }

    public function dateProvider()
    {
        return array(
            array(file_get_contents(__DIR__ . "/test.less"), file_get_contents(__DIR__ . "/test.css"))
        );
    }
}
