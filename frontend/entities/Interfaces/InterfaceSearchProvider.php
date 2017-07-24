<?php

namespace frontend\entities\Interfaces;

/**
 * Interface InterfacesSearchProvider
 * @package entities
 */
interface InterfaceSearchProvider
{
    /**
     * @return mixed
     */
    public function getRequest($textArea);
}