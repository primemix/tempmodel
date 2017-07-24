<?php

namespace frontend\entities\Engine;

use yii\base\Model;
use frontend\entities;

class SearchForm extends Model
{
    public $textArea;

    public function rules()
    {
        return [
            [['textArea'], 'required'],
        ];
    }

    public function searchResult()
    {
        if(!$this->validate()) {
            return NULL;
        }

//        var_dump($this->textArea);die;
        $request = new Request();
        $result = $request->getRequest($this->textArea);

        echo '<pre>';
        var_dump($result);die;
    }
}