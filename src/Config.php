<?php

namespace Jedkirby\PhpCs;

use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig
{
    /**
     * @see https://github.com/friendsofphp/php-cs-fixer#usage
     *
     * @var array
     */
    private $genericRules = [
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'ordered_imports' => true,
        'phpdoc_align' => false,
    ];

    /**
     * @param string $name
     */
    public function __construct($name = 'jedkirby')
    {
        parent::__construct($name);
        $this->setGenericRules();
    }

    private function setGenericRules()
    {
        $this->setRules($this->genericRules);
    }
}
