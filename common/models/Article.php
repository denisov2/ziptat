<?php

namespace common\models;

use yii\db\ActiveRecord;
use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "article".
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
class Article extends \yii\db\ActiveRecord
{

    public $file_image_en;
    public $file_image_ru;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title_en',
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
            [['title_en', 'title_ru' ], 'required'],
            [['description_en', 'description_ru', 'text_en', 'text_ru'], 'string'],
            [['active' ], 'integer'],
            [['file_image_en', 'file_image_ru' ], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
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


    public function uploadImages()
    {
        $time = time();

        if (!empty ($this->file_image_en)) {
            if ($this->validate(['file_image_en'])) {
                $this->file_image_en->saveAs(\Yii::getAlias('@upload-images') . '/articles/en/' . $time . '_' . $this->file_image_en->baseName . '.' . $this->file_image_en->extension);
                $this->image_en = Yii::$app->urlManagerFrontend->baseUrl . '/upload-images/articles/en/' . $time . '_' . $this->file_image_en->baseName . '.' . $this->file_image_en->extension;
            }
        }
        if (!empty ($this->file_image_ru)) {
            if ($this->validate(['file_image_ru'])) {
                $this->file_image_ru->saveAs(\Yii::getAlias('@upload-images') . '/articles/ru/' . $time . '_' . $this->file_image_ru->baseName . '.' . $this->file_image_ru->extension);
                $this->image_ru = Yii::$app->urlManagerFrontend->baseUrl . '/upload-images/articles/ru/' . $time . '_' . $this->file_image_ru->baseName . '.' . $this->file_image_ru->extension;
            }
        }
        return true;
    }

}
