<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title_en
 * @property string $title_ru
 * @property string $description_en
 * @property string $description_ru
 * @property string $image_en
 * @property string $image_ru
 * @property string $text_en
 * @property string $text_ru
 * @property string $slug
 * @property integer $active
 * @property string $date
 * @property integer $created_at
 * @property integer $updated_at
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_en', 'title_ru', 'slug'], 'required'],
            [['description_en', 'description_ru', 'text_en', 'text_ru'], 'string'],
            [['active', 'created_at', 'updated_at'], 'integer'],
            [['date'], 'safe'],
            [['title_en', 'title_ru', 'image_en', 'image_ru', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'title_en' => Yii::t('common', 'Title En'),
            'title_ru' => Yii::t('common', 'Title Ru'),
            'description_en' => Yii::t('common', 'Description En'),
            'description_ru' => Yii::t('common', 'Description Ru'),
            'image_en' => Yii::t('common', 'Image En'),
            'image_ru' => Yii::t('common', 'Image Ru'),
            'text_en' => Yii::t('common', 'Text En'),
            'text_ru' => Yii::t('common', 'Text Ru'),
            'slug' => Yii::t('common', 'Slug'),
            'active' => Yii::t('common', 'Active'),
            'date' => Yii::t('common', 'Date'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }
}
