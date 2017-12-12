<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use yii\db\ActiveRecord;

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
class Label extends \yii\db\ActiveRecord implements \dvizh\cart\interfaces\CartElement
{

    public $file_image;
    public $lang;

    const ORIGINAL_FOLDER = 'original';
    const BIG_FOLDER = 'big';
    const MIDDLE_FOLDER = 'middle';
    const THUMBNAIL_FOLDER = 'thumbnail';

    const BIG_WIDTH = 1800;
    const BIG_HEIGHT = 1200;

    const MIDDLE_WIDTH = 540;
    const MIDDLE_HEIGHT = 360;

    const THUMBNAIL_WIDTH = 360;
    const THUMBNAIL_HEIGHT = 240;


    const STATUS_IN_STOCK = 1;
    const STATUS_NOT_IN_STOCK = 2;

    public function init() {

        $this->lang = Yii::$app->language;
        parent::init();

    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'label';
    }

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name_en',
                'immutable' => false,
                'ensureUnique' => true,
                'slugAttribute' => 'slug'
            ],

            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_en', 'name_ru', 'slug', 'subcategory_id'], 'required'],
            [['subcategory_id', 'active', 'status', 'likes'], 'integer'],
            [['description_en', 'description_ru'], 'string'],
            [['name_en', 'name_ru', 'slug', 'image_original'], 'string', 'max' => 255],
            ['file_image', 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
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

    public function uploadImages()
    {
        $time = time();

        if (!empty ($this->file_image)) {
            if ($this->validate(['file_image'])) {
                $this->file_image->saveAs(\Yii::getAlias('@labels') . '/' . self::ORIGINAL_FOLDER . '/' . $time . '_' . $this->file_image->baseName . '.' . $this->file_image->extension);
                $this->image_original = $time . '_' . $this->file_image->baseName . '.' . $this->file_image->extension;
                // var_dump($this->image_original); die();
            }
        }

        return true;
    }

    public function getImageUrl($type = self::ORIGINAL_FOLDER)
    {

        return '/labels/' . $type . '/' . $this->image_original;
    }

    public function getImagePath($type = self::ORIGINAL_FOLDER)
    {
        return Yii::getAlias("@labels/$type/{$this->image_original}");

    }

    public function isImageExist($type = self::ORIGINAL_FOLDER)
    {

        return file_exists($this->getImagePath($type));

    }

    public function getImageInfo($type = self::ORIGINAL_FOLDER)
    {
        $result = "<p>" . Yii::t('common', 'Image data: ') . getimagesize($this->getImagePath($type)) [3] . ". ";
        $result .= Yii::t('common', 'Image size: ') . round(filesize($this->getImagePath($type)) / 1024, 2) . " Kb.</p>";

        return $result;

    }

    public static function  getStatusesAsArray()
    {
        return [
            self::STATUS_IN_STOCK => Yii::t('common', 'In stock'),
            self::STATUS_NOT_IN_STOCK => Yii::t('common', 'Not in stock'),
        ];
    }

    public function getStatus()
    {

        return isset(self::getStatusesAsArray()[$this->status]) ? $this->getStatusesAsArray()[$this->status] : false;

    }

    public function getCartId()
    {
        return $this->id;
    }

    public function getCartName()
    {

        return $this->{"name_$this->lang"};
    }

    public function getCartPrice()
    {
       
        return 3;
       // return $this->price;
    }

    //Опции продукта для выбора при добавлении в корзину
    public function getCartOptions()
    {
        return [
            '1' => [
                'name' => 'Цвет',
                'variants' => ['1' => 'Красный', '2' => 'Белый', '3' => 'Синий'],
            ],
            '2' => [
                'name' => 'Размер',
                'variants' => ['4' => 'XL', '5' => 'XS', '6' => 'XXL'],
            ]
        ];
    }
    //..


}
