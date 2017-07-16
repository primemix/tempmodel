<?php

namespace frontend\entities\Engine;

use frontend\entities\Interfaces\InterfacesSearchProvider;

/**
 * Class Request
 * @package entities\Engine
 */
class Request implements InterfacesSearchProvider
{
    /**
     * @var array
     */
    protected $data = array();

    /**
     * @param $textArea
     * @return array
     */
    public function getRequest($textArea)
    {
        return $this->data = explode(PHP_EOL, $textArea);
    }
}