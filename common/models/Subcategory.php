<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subcategory".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $name_en
 * @property string $name_ru
 * @property string $slug
 * @property integer $active
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Label[] $labels
 * @property Category $category
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
            [['category_id', 'name_en', 'name_ru', 'slug'], 'required'],
            [['category_id', 'active', 'created_at', 'updated_at'], 'integer'],
            [['name_en', 'name_ru', 'slug'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'category_id' => Yii::t('common', 'Category ID'),
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
    public function getLabels()
    {
        return $this->hasMany(Label::className(), ['subcategory_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
