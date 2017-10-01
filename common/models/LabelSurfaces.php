<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "label_surface".
 *
 * @property integer $id
 * @property integer $label_id
 * @property integer $surface_id
 *
 * @property Label $label
 * @property Surface $surface
 */
class LabelSurfaces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'label_surface';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['label_id', 'surface_id'], 'integer'],
            [['label_id'], 'exist', 'skipOnError' => true, 'targetClass' => Label::className(), 'targetAttribute' => ['label_id' => 'id']],
            [['surface_id'], 'exist', 'skipOnError' => true, 'targetClass' => Surface::className(), 'targetAttribute' => ['surface_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'label_id' => Yii::t('common', 'Label ID'),
            'surface_id' => Yii::t('common', 'Surface ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLabel()
    {
        return $this->hasOne(Label::className(), ['id' => 'label_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurface()
    {
        return $this->hasOne(Surface::className(), ['id' => 'surface_id']);
    }
}
