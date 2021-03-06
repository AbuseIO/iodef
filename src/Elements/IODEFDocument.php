<?php

/**
 * http://www.rfc-base.org/txt/rfc-5070.txt
 * https://8n1.org/10935/e6dc
 * https://8n1.org/10933/a0d6
 *
 */
namespace Marknl\Iodef\Elements;

use Marknl\Iodef\IodefElement;

class IODEFDocument extends IodefElement
{
    public function __construct()
    {
        $this->attributes = [
            'version'   => '1.00',
            'lang'      => 'en-US',
            'formatid'  => '',
        ];

        $this->elements = [
            'Incident' => parent::REQUIRED_MULTI,
        ];
    }

    /**
     * Attribute validation rules
     * @return array
     */
    public function getAttributeRules()
    {
        return [
            'required' => [
                ['version'],
                ['lang'],
            ],
            'regex' => [
                ['lang', '/^([a-zA-Z]{2}|[iI]-[a-zA-Z]+|[xX]-[a-zA-Z]{1,8})(-[a-zA-Z]{1,8})*/i'],
            ],
        ];
    }
}
