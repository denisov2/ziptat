<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "label".
 *
 * @property integer $id
 * @property string $name_en
 * @property string $name_ru
 * @property string $slug
 * @property integer $subcategory_id
 * @property string $description_en
 * @property string $description_ru
 * @property integer $active
 * @property integer $status
 * @property integer $likes
 * @property string $image_original
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Subcategory $subcategory
 */
class Label extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'label';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_en', 'name_ru', 'slug', 'subcategory_id'], 'required'],
            [['subcategory_id', 'active', 'status', 'likes', 'created_at', 'updated_at'], 'integer'],
            [['description_en', 'description_ru'], 'string'],
            [['name_en', 'name_ru', 'slug', 'image_original'], 'string', 'max' => 255],
            [['subcategory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subcategory::className(), 'targetAttribute' => ['subcategory_id' => 'id']],
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
            'subcategory_id' => Yii::t('common', 'Subcategory ID'),
            'description_en' => Yii::t('common', 'Description En'),
            'description_ru' => Yii::t('common', 'Description Ru'),
            'active' => Yii::t('common', 'Active'),
            'status' => Yii::t('common', 'Status'),
            'likes' => Yii::t('common', 'Likes'),
            'image_original' => Yii::t('common', 'Image Original'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubcategory()
    {
        return $this->hasOne(Subcategory::className(), ['id' => 'subcategory_id']);
    }
}
