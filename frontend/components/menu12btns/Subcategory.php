<?php
/**
 * User: Администратор
 * Date: 11.04.2017
 * Time: 21:34
 */

namespace frontend\components\menu12btns;


use yii\db\ActiveRecord;

class Subcategory extends ActiveRecord
{
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{subcategory}}';
    }


    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['cat_id' => 'parent_id']);
    }

}