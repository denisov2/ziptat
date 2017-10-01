<?php

use yii\db\Migration;

/**

 */
class m171001_102648_create_subcategory_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(
            'subcategory',
            [
                'id' => $this->primaryKey(),
                'category_id' => $this->integer()->notNull(),
                'name_en' => $this->string()->notNull(),
                'name_ru' => $this->string()->notNull(),
                'slug' => $this->string()->notNull(),
                'active' => $this->integer(),
                'created_at' => $this->integer(),
                'updated_at' => $this->integer(),
            ],
            'ENGINE=InnoDB CHARSET=utf8'
        );

        // creates index for column `category_id`
        $this->createIndex(
            'idx-subcategory-category_id',
            'subcategory',
            'category_id'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-subcategory-category_id',
            'subcategory',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    } 

    /**
     * @inheritdoc
     */
    public function down()
    {

        $this->dropForeignKey(
            'fk-subcategory-category_id',
            'subcategory'
        );


        $this->dropIndex(
            'idx-subcategory-category_id',
            'subcategory'
        );

        $this->dropTable('subcategory');
    }
}
