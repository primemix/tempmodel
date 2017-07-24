<?php

namespace frontend\entities\Engine;

use yii\base\Model;

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

        var_dump($this->textArea);die;
    }
}