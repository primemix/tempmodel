<?php

namespace frontend\entities\Interfaces;

/**
 * Interface InterfacesSearchProvider
 * @package entities
 */
interface InterfacesSearchProvider
{
    /**
     * @return mixed
     */
    public function getRequest($textArea);
}