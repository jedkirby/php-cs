<?php

namespace Jedkirby\PhpCs;

use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig
{
    /**
     * @return array
     */
    protected function getCustomRules()
    {
        return [];
    }

    /**
     * @return array
     */
    protected function getGenericRules()
    {
        return [
            '@Symfony' => true,
            'array_syntax' => ['syntax' => 'short'],
            'concat_space' => ['spacing' => 'one'],
            'ordered_imports' => true,
            'phpdoc_align' => false,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getRules()
    {
        return array_merge(
            $this->getGenericRules(),
            $this->getCustomRules()
        );
    }
}
