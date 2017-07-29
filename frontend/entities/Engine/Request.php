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
    protected $old_array = array();
    protected $new_array = array();

    protected $temp = array();

    /**
     * @param $textArea
     * @return array
     */
    public function getRequest($textArea)
    {
        $this->old_array = explode(PHP_EOL, $textArea);

        foreach ($this->old_array as $item => $value) {
            $a = trim($value);
            $this->temp[$item] = $a;
        }
        $this->new_array = array_diff($this->temp, array(0,'', NULL, false));

        return $this->new_array;
    }
}
