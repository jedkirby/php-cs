PHP Code Styling
-------
[![Author](https://img.shields.io/badge/author-@jedkirby-blue.svg?style=flat-square)](https://twitter.com/jedkirby)
[![Packagist](https://img.shields.io/packagist/v/jedkirby/php-cs.svg?style=flat-square)](https://packagist.org/packages/jedkirby/php-cs)
[![Packagist](https://img.shields.io/packagist/l/jedkirby/php-cs.svg?style=flat-square)](https://github.com/jedkirby/php-cs/blob/master/LICENSE)

Simply because I want my code styles to be consistent across projects.

Installation
-------

This package can be installed via [Composer]:

``` bash
$ composer require jedkirby/php-cs --dev
```

It requires **PHP >= 5.6.4**.

Usage
-------

After installing, copy the following boilerplate configuration into a file named `.php_cs` in the root of your project, remembering to modify the finder directories and/or files:

``` php
<?php

require_once realpath(__DIR__ . '/vendor/autoload.php');

use PhpCsFixer\Finder;
use Jedkirby\PhpCs\Config;

$finder = Finder::create();
$finder->in(__DIR__ . '/src');

$config = new Config();
$config->setFinder($finder);

return $config;

```

Now it's configured, ensure you have [php-cs-fixer](https://github.com/friendsofphp/php-cs-fixer#installation) installed, and go ahead and run: `php-cs-fixer fix`.
