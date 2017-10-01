<?php

use yii\db\Migration;

/**
 * Handles the creation of table `label_surface`.
 * Has foreign keys to the tables:
 *
 * - `label`
 * - `surface`
 */
class m171001_093501_create_junction_table_for_label_and_surface_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('label_surface', [
            'id' => $this->primaryKey(),
            'label_id' => $this->integer(),
            'surface_id' => $this->integer(),
        ],
            'ENGINE=InnoDB CHARSET=utf8');

        // creates index for column `label_id`
        $this->createIndex(
            'idx-label_surface-label_id',
            'label_surface',
            'label_id'
        );

        // add foreign key for table `label`
        $this->addForeignKey(
            'fk-label_surface-label_id',
            'label_surface',
            'label_id',
            'label',
            'id',
            'CASCADE'
        );

        // creates index for column `surface_id`
        $this->createIndex(
            'idx-label_surface-surface_id',
            'label_surface',
            'surface_id'
        );

        // add foreign key for table `surface`
        $this->addForeignKey(
            'fk-label_surface-surface_id',
            'label_surface',
            'surface_id',
            'surface',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `label`
        $this->dropForeignKey(
            'fk-label_surface-label_id',
            'label_surface'
        );

        // drops index for column `label_id`
        $this->dropIndex(
            'idx-label_surface-label_id',
            'label_surface'
        );

        // drops foreign key for table `surface`
        $this->dropForeignKey(
            'fk-label_surface-surface_id',
            'label_surface'
        );

        // drops index for column `surface_id`
        $this->dropIndex(
            'idx-label_surface-surface_id',
            'label_surface'
        );

        $this->dropTable('label_surface');
    }
}
