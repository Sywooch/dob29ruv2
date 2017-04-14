<?php
/**
 * User: Администратор
 * Date: 11.04.2017
 * Time: 21:29
 */

namespace frontend\components\menu12btns;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{category}}';
    }

    public function getSubcategory()
    {
        return $this->hasMany(Subcategory::className(), ['parent_id' => 'cat_id']);
    }
}