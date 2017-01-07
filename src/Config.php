<?php

namespace Jedkirby\PhpCs;

use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig
{

    /**
     * @var array
     */
    private $genericRules = [

        // Use the Symfony style as a base
        '@Symfony' => true,

        // Use short array syntax
        'array_syntax' => ['syntax' => 'short'],

        // Concat with spaces
        'concat_space' => ['spacing' => 'one'],

        // Order use statements alphabetically
        'ordered_imports' => true,

        // Do not vertically align params
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

    /**
     * @return void
     */
    private function setGenericRules()
    {
        $this->setRules($this->genericRules);
    }

}
