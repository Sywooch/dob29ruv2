<?php
/**
 * User: Администратор
 * Date: 03.04.2017
 * Time: 22:09
 */

namespace frontend\components\sitesearch;

use yii\base\Model;

class SearchForm extends Model
{
    public $searchWord;
    public $qact;
    public $SortBy;
    public $Dir;
    public $City;
    public $Folder;
    public $Type;
    public $Price_Start;
    public $Price_End;
    public $Currency;
    public $Period;
    public $OwnerAdvID;

    public function rules()
    {
        return [
            [ 'searchWord', 'string', 'max' => 255 ]
        ];
    }
}