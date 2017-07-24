<?php

namespace frontend\models;

class TestClass
{
    protected $list;

    public function __construct($text)
    {
        $this->list = $text;
    }

    public function getList()
    {
        return $this->list;
    }
}