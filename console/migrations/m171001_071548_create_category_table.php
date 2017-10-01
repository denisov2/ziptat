<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m171001_071548_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(
            'category',
            [
                'id' => $this->primaryKey(),
                'name_en' => $this->string()->notNull(),
                'name_ru' => $this->string()->notNull(),
                'slug' => $this->string()->notNull(),
                'active' => $this->integer(),
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
        $this->dropTable('category');
    }
}
