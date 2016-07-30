# LessCompiler

[![Build Status](https://travis-ci.org/Prowect/Less.svg)](https://travis-ci.org/Prowect/Less)
[![Code Climate](https://codeclimate.com/github/Prowect/LessCompiler/badges/gpa.svg)](https://codeclimate.com/github/Prowect/LessCompiler)
[![Test Coverage](https://codeclimate.com/github/Prowect/LessCompiler/badges/coverage.svg)](https://codeclimate.com/github/Prowect/LessCompiler/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/Less.svg)](https://packagist.org/packages/drips/less)

Mithilfe des LessCompilers kann LESS in CSS übersetzt werden. Dies funktioniert wie folgt:

```php
<?php

use Drips\Less\Compiler;

$less_file = "path/to/file.less";
$css_file = "path/to/style.css";

// Inhalt der LESS-Datei auslesen
$less = file_get_contents($less_file);
// LESS mithilfe des LessCompilers in CSS übersetzen
$compiler = new Compiler;
$css = $compiler->compile($less);
// CSS-Code in die jeweilige Datei schreiben
file_put_contents($css_file, $css);
```

Zusätzlich beinhaltet der LessCompiler einen Controller zum Automatischen Ausliefern von LESS-Dateien als CSS-Dateien. D.h. sie werden automatisch übersetzt.

In deinem `DRIPS` Verzeichnis legst du zunächst ein Verzeichnis `less` an. In diesem befinden sich alle deine LESS-Dateien, die du später gerne übersetzt ausliefern möchtest. Anschließend musst du den jeweiligen Controller als Route registrieren, dass die Datei automatisch ausgeliefert werden kann.

```php
<?php

$router->add('less', '/css/{file}.css', Drips\Less\Controller::class);
```
