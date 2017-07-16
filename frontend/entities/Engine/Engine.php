<?php

namespace frontend\entities\Engine;

/**
 * Class Engine
 * @package entities\Engine
 */
class Engine
{
    /**
     * @var InerfaceSearchProvider
     */
    protected $requestProvider;

    /**
     * Engine constructor.
     * @param InerfaceSearchProvider $requestProvider
     */
    public function __construct(InerfaceSearchProvider $requestProvider)
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