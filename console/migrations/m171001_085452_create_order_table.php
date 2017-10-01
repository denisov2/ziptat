<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 * Has foreign keys to the tables:
 *
 * - `User`
 */
class m171001_085452_create_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'patronymic_name' => $this->string(),
            'city_id' => $this->integer()->notNull(),
            'address' => $this->string()->notNull(),
            'zipcode' => $this->string()->notNull(),
            'payment_type'=> $this->integer()->notNull(),
            'delivery_type'=> $this->integer()->notNull(),
            'comment' => $this->text(),
            'status' => $this->integer(),
            'paid' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),

        ],
            'ENGINE=InnoDB CHARSET=utf8');

        // creates index for column `user_id`
        $this->createIndex(
            'idx-order-user_id',
            'order',
            'user_id'
        );

        // add foreign key for table `User`
        $this->addForeignKey(
            'fk-order-user_id',
            'order',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `User`
        $this->dropForeignKey(
            'fk-order-user_id',
            'order'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-order-user_id',
            'order'
        );

        $this->dropTable('order');
    }
}
