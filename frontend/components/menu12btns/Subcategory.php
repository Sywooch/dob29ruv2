<?php

namespace frontend\components\menu12btns;

use yii;
use frontend\models\Adverts;

/**
 * This is the model class for table "subcategory".
 *
 * @property integer $sub_id
 * @property integer $parent_id
 * @property string $sub_name
 */
class Subcategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'sub_name'], 'required'],
            [['parent_id'], 'integer'],
            [['sub_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_id' => 'Sub ID',
            'parent_id' => 'Parent ID',
            'sub_name' => 'Sub Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['cat_id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdverts()
    {
        return $this->hasOne( Adverts::className(), [ 'ad_folder' => 'sub_id' ] );
    }
}
