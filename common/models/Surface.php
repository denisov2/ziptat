<?php

namespace common\models;

use Yii; 

/**
 * This is the model class for table "surface".
 *
 * @property integer $id
 * @property string $name_en
 * @property string $name_ru
 * @property string $slug
 * @property integer $active
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property LabelSurface[] $labelSurfaces
 */
class Surface extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surface';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_en', 'name_ru'], 'required'],
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
    public function getLabelSurfaces()
    {
        return $this->hasMany(LabelSurface::className(), ['surface_id' => 'id']);
    }
}
