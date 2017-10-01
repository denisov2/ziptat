<?php

use yii\db\Migration;


class m171001_105300_create_label_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(
            'label',
            [
                'id' => $this->primaryKey(),
                'name_en' => $this->string()->notNull(),
                'name_ru' => $this->string()->notNull(),
                'slug' => $this->string()->notNull(),
                'subcategory_id' => $this->integer()->notNull(),
                'description_en' => $this->text(),
                'description_ru' => $this->text(),
                'active' => $this->integer(),
                'status' => $this->integer(),
                'likes' => $this->integer()->defaultValue(0),
                'image_original' => $this->string(),
                'created_at' => $this->integer(),
                'updated_at' => $this->integer(),
            ],
            'ENGINE=InnoDB CHARSET=utf8'
        );


        $this->createIndex(
            'idx-label-subcategory_id',
            'label',
            'subcategory_id'
        );


        $this->addForeignKey(
            'fk-label-subcategory_id',
            'label',
            'subcategory_id',
            'subcategory',
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
            'fk-label-subcategory_id',
            'label'
        );


        $this->dropIndex(
            'idx-label-subcategory_id',
            'label'
        );

        $this->dropTable('label');
    }
}
