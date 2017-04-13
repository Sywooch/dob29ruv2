<?php
/**
 * User: Администратор
 * Date: 03.04.2017
 * Time: 22:09
 */

namespace frontend\models;


use yii\base\Model;

class SearchForm extends Model
{
    public $q;

    public function rules()
    {
        return [
            [ 'q',
                'string',
                'max' => 255 ]
        ];
    }
}