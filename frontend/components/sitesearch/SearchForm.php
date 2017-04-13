<?php
/**
 * User: Администратор
 * Date: 03.04.2017
 * Time: 22:09
 */

namespace frontend\widgets\sitesearch;


use yii\base\Model;

class SearchForm extends Model
{
    public $searchWord;
    public $qact;

    public function rules()
    {
        return [
            [ 'searchWord', 'string', 'max' => 255 ]
        ];
    }
}