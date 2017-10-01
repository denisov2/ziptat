<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m171001_130500_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(
            'article',
            [
                'id' => $this->primaryKey(),
                'title_en' => $this->string()->notNull(),
                'title_ru' => $this->string()->notNull(),
                'description_en' => $this->text(),
                'description_ru' => $this->text(),
                'image_en' => $this->string(),
                'image_ru' => $this->string(),
                'text_en' => $this->text(),
                'text_ru' => $this->text(),
                'slug' => $this->string()->notNull(),
                'active' => $this->integer(),
                'date' => $this->date(),
                'created_at' => $this->integer(),
                'updated_at' => $this->integer(),
            ],
            'ENGINE=InnoDB CHARSET=utf8'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article');
    }
}
