<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "canvas".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $type
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Order $order
 * @property CanvasLabel[] $canvasLabels
 */
class Canvas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'canvas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'type', 'created_at', 'updated_at'], 'integer'],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'order_id' => Yii::t('common', 'Order ID'),
            'type' => Yii::t('common', 'Type'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCanvasLabels()
    {
        return $this->hasMany(CanvasLabel::className(), ['canvas_id' => 'id']);
    }
}
