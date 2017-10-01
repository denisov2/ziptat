<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "canvas_label".
 *
 * @property integer $id
 * @property integer $canvas_id
 * @property integer $label_id
 * @property integer $top
 * @property integer $left
 * @property integer $width
 * @property integer $height
 * @property integer $rotate
 * @property string $color
 *
 * @property Canvas $canvas
 * @property Label $label
 */
class CanvasLabels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'canvas_label';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['canvas_id', 'label_id', 'top', 'left', 'width', 'height', 'rotate'], 'integer'],
            [['top', 'left', 'width', 'height'], 'required'],
            [['color'], 'string', 'max' => 255],
            [['canvas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Canvas::className(), 'targetAttribute' => ['canvas_id' => 'id']],
            [['label_id'], 'exist', 'skipOnError' => true, 'targetClass' => Label::className(), 'targetAttribute' => ['label_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'canvas_id' => Yii::t('common', 'Canvas ID'),
            'label_id' => Yii::t('common', 'Label ID'),
            'top' => Yii::t('common', 'Top'),
            'left' => Yii::t('common', 'Left'),
            'width' => Yii::t('common', 'Width'),
            'height' => Yii::t('common', 'Height'),
            'rotate' => Yii::t('common', 'Rotate'),
            'color' => Yii::t('common', 'Color'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCanvas()
    {
        return $this->hasOne(Canvas::className(), ['id' => 'canvas_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLabel()
    {
        return $this->hasOne(Label::className(), ['id' => 'label_id']);
    }
}
