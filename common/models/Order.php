<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $patronymic_name
 * @property integer $city_id
 * @property string $address
 * @property string $zipcode
 * @property integer $payment_type
 * @property integer $delivery_type
 * @property string $comment
 * @property integer $status
 * @property integer $paid
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Canvas[] $canvas
 * @property User $user
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'city_id', 'payment_type', 'delivery_type', 'status', 'paid', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name', 'city_id', 'address', 'zipcode', 'payment_type', 'delivery_type'], 'required'],
            [['comment'], 'string'],
            [['first_name', 'last_name', 'patronymic_name', 'address', 'zipcode'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'user_id' => Yii::t('common', 'User ID'),
            'first_name' => Yii::t('common', 'First Name'),
            'last_name' => Yii::t('common', 'Last Name'),
            'patronymic_name' => Yii::t('common', 'Patronymic Name'),
            'city_id' => Yii::t('common', 'City ID'),
            'address' => Yii::t('common', 'Address'),
            'zipcode' => Yii::t('common', 'Zipcode'),
            'payment_type' => Yii::t('common', 'Payment Type'),
            'delivery_type' => Yii::t('common', 'Delivery Type'),
            'comment' => Yii::t('common', 'Comment'),
            'status' => Yii::t('common', 'Status'),
            'paid' => Yii::t('common', 'Paid'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCanvas()
    {
        return $this->hasMany(Canvas::className(), ['order_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public static function getOrdersAsArray()
    {
        return ArrayHelper::map( self::find()->all() , 'id', 'id');
    }
}
