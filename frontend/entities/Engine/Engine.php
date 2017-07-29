<?php

namespace frontend\entities\Engine;

use frontend\entities\Interfaces\InterfaceSearchProvider;
use Prophecy\Exception\Doubler\InterfaceNotFoundException;

/**
 * Class Engine
 * @package entities\Engine
 */
class Engine
{
    /**
     * @var InterfaceSearchProvider instanceoff
     */
    protected $requestProvider;

    /**
     * Engine constructor.
     * @param $requestProvider
     */
    public function __construct($requestProvider)
    {
        $this->requestProvider = $requestProvider;
    }

    /**
     * @param $textArea
     * @return array
     */
    public function Request($textArea) : array
    {
        return $request = $this->requestProvider->getRequest($textArea);
    }
}

