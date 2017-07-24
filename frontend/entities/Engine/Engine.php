<?php

namespace frontend\entities\Engine;
use Prophecy\Exception\Doubler\InterfaceNotFoundException;

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

    protected $list;

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