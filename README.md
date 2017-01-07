PHP Code Styling
-------

Simply because I want my code styles to be consistent across projects.

Installation
-------

This package can be installed via [Composer]:

``` bash
$ composer require jedkirby/php-cs
```

It requires **PHP >= 5.6.4**.

Usage
-------

After installing, copy the following boilerplate configuration into a file named `.php_cs` in the root of your project:

``` php
<?php

require_once __DIR__ . '/vendor/jedkirby/php-cs/src/Config.php';

use PhpCsFixer\Finder;
use Jedkirby\PhpCs\Config;

$finder = Finder::create();
$finder->in(__DIR__ . '/src');

$config = new Config();
$config->setFinder($finder);

return $config;
```
