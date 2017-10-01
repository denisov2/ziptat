<?php

use yii\db\Migration;

/**
 * Handles the creation of table `canvas`.
 * Has foreign keys to the tables:
 *
 * - `order`
 */
class m171001_090812_create_canvas_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('canvas', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'type' => $this->integer()->notNull()->defaultValue(1),

            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ],
            'ENGINE=InnoDB CHARSET=utf8');

        // creates index for column `order_id`
        $this->createIndex(
            'idx-canvas-order_id',
            'canvas',
            'order_id'
        );

        // add foreign key for table `order`
        $this->addForeignKey(
            'fk-canvas-order_id',
            'canvas',
            'order_id',
            'order',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `order`
        $this->dropForeignKey(
            'fk-canvas-order_id',
            'canvas'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            'idx-canvas-order_id',
            'canvas'
        );

        $this->dropTable('canvas');
    }
}
