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
            [['textArea'], 'required', 'message' => 'Movie title area cannot be blank'],
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
        
        $request = new Request();
        $result = $request->getRequest($this->textArea);

        return $result;
//        echo '<pre>';
//        print_r($result);die;
    }
}