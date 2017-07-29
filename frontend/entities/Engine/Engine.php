<?php

namespace frontend\entities\Engine;

use frontend\entities\Interfaces\InterfaceSearchProvider;

/**
 * Class Engine
 * @package entities\Engine
 */
class Engine
{
    /**
     * @var InterfaceSearchProvider
     */
    protected $requestProvider;

    protected $list;

    /**
     * Engine constructor.
     * @param InterfaceSearchProvider $requestProvider
     */
    public function __construct(InterfaceSearchProvider $requestProvider)
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
