# LessCompiler

[![Build Status](https://travis-ci.org/Prowect/LessCompiler.svg)](https://travis-ci.org/Prowect/LessCompiler)
[![Code Climate](https://codeclimate.com/github/Prowect/LessCompiler/badges/gpa.svg)](https://codeclimate.com/github/Prowect/LessCompiler)
[![Test Coverage](https://codeclimate.com/github/Prowect/LessCompiler/badges/coverage.svg)](https://codeclimate.com/github/Prowect/LessCompiler/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/LessCompiler.svg)](https://packagist.org/packages/drips/lesscompiler)

Mithilfe des LessCompilers kann LESS in CSS übersetzt werden. Dies funktioniert wie folgt:

```php
<?php

use Drips\LessCompiler\LessCompiler;

$less_file = "path/to/file.less";
$css_file = "path/to/style.css";

// Inhalt der LESS-Datei auslesen
$less = file_get_contents($less_file);
// LESS mithilfe des LessCompilers in CSS übersetzen
$css = LessCompiler::compile($less);
// CSS-Code in die jeweilige Datei schreiben
file_put_contents($css_file, $css);
```
