<?php

namespace frontend\entities\Engine;

use yii\base\Model;

class SearchForm extends Model
{
    public $description;

    public function rules()
    {
        return [
            [['description'], 'required'],
        ];
    }
}