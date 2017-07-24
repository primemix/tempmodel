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
        $this->data = explode(PHP_EOL, $textArea);

        foreach ($this->data as $item => $value) {
            $a = trim($value);
            $new[$item] = $a;
        }
        $new_array = array_diff($new, array(0,'', NULL, false));
        
        return $new_array;
    }
}