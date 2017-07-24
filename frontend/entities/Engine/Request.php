<?php

namespace frontend\entities\Engine;

use frontend\entities\Interfaces\InterfaceSearchProvider;

/**
 * Class Request
 * @package entities\Engine
 */
class Request implements InterfaceSearchProvider
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