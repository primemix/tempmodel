<?php

namespace frontend\entities\Engine;

use frontend\entities\Interfaces\InterfaceSearchProvider;
<<<<<<< HEAD
use Prophecy\Exception\Doubler\InterfaceNotFoundException;
=======
>>>>>>> origin/dev

/**
 * Class Engine
 * @package entities\Engine
 */
class Engine
{
    /**
<<<<<<< HEAD
     * @var InterfaceSearchProvider instanceoff
=======
     * @var InterfaceSearchProvider
>>>>>>> origin/dev
     */
    protected $requestProvider;

    /**
     * Engine constructor.
<<<<<<< HEAD
     * @param $requestProvider
     */
    public function __construct($requestProvider)
=======
     * @param InterfaceSearchProvider $requestProvider
     */
    public function __construct(InterfaceSearchProvider $requestProvider)
>>>>>>> origin/dev
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
<<<<<<< HEAD

=======
>>>>>>> origin/dev
