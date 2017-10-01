<?php

use yii\db\Migration;

/**
 * Handles the creation of table `canvas_label`.
 * Has foreign keys to the tables:
 *
 * - `canvas`
 * - `label`
 */
class m171001_091300_create_junction_table_for_canvas_and_label_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('canvas_label', [
            'id' => $this->primaryKey(),
            'canvas_id' => $this->integer(),
            'label_id' => $this->integer(),
            'top' => $this->integer()->notNull(),
            'left' => $this->integer()->notNull(),
            'width' => $this->integer()->notNull(),
            'height' => $this->integer()->notNull(),
            'rotate' => $this->integer()->defaultValue(0),
            'color' => $this->string()->defaultValue('#FFFFFF'),

        ],
            'ENGINE=InnoDB CHARSET=utf8');

        // creates index for column `canvas_id`
        $this->createIndex(
            'idx-canvas_label-canvas_id',
            'canvas_label',
            'canvas_id'
        );

        // add foreign key for table `canvas`
        $this->addForeignKey(
            'fk-canvas_label-canvas_id',
            'canvas_label',
            'canvas_id',
            'canvas',
            'id',
            'CASCADE'
        );

        // creates index for column `label_id`
        $this->createIndex(
            'idx-canvas_label-label_id',
            'canvas_label',
            'label_id'
        );

        // add foreign key for table `label`
        $this->addForeignKey(
            'fk-canvas_label-label_id',
            'canvas_label',
            'label_id',
            'label',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `canvas`
        $this->dropForeignKey(
            'fk-canvas_label-canvas_id',
            'canvas_label'
        );

        // drops index for column `canvas_id`
        $this->dropIndex(
            'idx-canvas_label-canvas_id',
            'canvas_label'
        );

        // drops foreign key for table `label`
        $this->dropForeignKey(
            'fk-canvas_label-label_id',
            'canvas_label'
        );

        // drops index for column `label_id`
        $this->dropIndex(
            'idx-canvas_label-label_id',
            'canvas_label'
        );

        $this->dropTable('canvas_label');
    }
}
