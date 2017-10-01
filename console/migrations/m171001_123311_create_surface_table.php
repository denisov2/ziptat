<?php

use yii\db\Migration;

/**
 * Handles the creation of table `surface`.
 */
class m171001_123311_create_surface_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(
            'surface',
            [
                'id' => $this->primaryKey(),
                'name_en' => $this->string()->notNull(),
                'name_ru' => $this->string()->notNull(),
                'slug' => $this->string(),
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
        $this->dropTable('surface');
    }
}
