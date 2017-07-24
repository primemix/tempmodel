<?php

namespace frontend\entities\Engine;

use yii\base\Model;
use frontend\entities;

/**
 * Class SearchForm
 * @package frontend\entities\Engine
 */
class SearchForm extends Model
{
    /**
     * @var string $textArea - text area
     */
    public $textArea;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['textArea'], 'required'],
        ];
    }

    /**
     * @return null
     */
    public function searchResult()
    {
        if(!$this->validate()) {
            return NULL;
        }

//        var_dump($this->textArea);die;
        $request = new Request();
        $result = $request->getRequest($this->textArea);

        return $result;
//        echo '<pre>';
//        print_r($result);die;
    }
}