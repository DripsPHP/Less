<?php

namespace tests;

use Drips\LessCompiler\LessCompiler;
use PHPUnit_Framework_TestCase;

include __DIR__.'/../vendor/autoload.php';

class LessCompilerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dateProvider
     */
    public function testLessCompiler($less, $css)
    {
        $this->assertEquals(LessCompiler::compile($less), $css);
    }

    public function dateProvider()
    {
        return array(
            array('@base: #f938ab;

.box-shadow(@style, @c) when (iscolor(@c)) {
  -webkit-box-shadow: @style @c;
  box-shadow:         @style @c;
}
.box-shadow(@style, @alpha: 50%) when (isnumber(@alpha)) {
  .box-shadow(@style, rgba(0, 0, 0, @alpha));
}
.box {
  color: saturate(@base, 5%);
  border-color: lighten(@base, 30%);
  div { .box-shadow(0 0 5px, 30%) }
}', '.box {
  color: #fe33ac;
  border-color: #fdcdea;
}
.box div {
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}'),
        );
    }
}
