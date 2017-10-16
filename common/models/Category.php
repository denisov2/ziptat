<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name_en
 * @property string $name_ru
 * @property string $slug
 * @property integer $active
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Subcategory[] $subcategories
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_en', 'name_ru', 'slug'], 'required'],
            [['active', 'created_at', 'updated_at'], 'integer'],
            [['name_en', 'name_ru', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'name_en' => Yii::t('common', 'Name En'),
            'name_ru' => Yii::t('common', 'Name Ru'),
            'slug' => Yii::t('common', 'Slug'),
            'active' => Yii::t('common', 'Active'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubcategories()
    {
        return $this->hasMany(Subcategory::className(), ['category_id' => 'id']);
    }

    static public function getItemsAsArray()
    {
        return ArrayHelper::map(self::find()->all(), 'id', 'name_'.Yii::$app->language);
    }
}
