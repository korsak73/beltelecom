<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%subscriptions}}`.
 */
class m190318_185409_create_subscriptions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subscriptions}}', [
            'id' => $this->primaryKey(11),
            'email'=>$this->string(),
            'token' =>$this->string( 100)->defaultValue(null),
            'created_at' => Schema::TYPE_DATETIME . ' NULL',
            'updated_at' => Schema::TYPE_DATETIME . ' NULL',
            'created_at' => $this->integer(11)->defaultValue(null),
            'updated_at' => $this->integer(11)->defaultValue(null)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subscriptions}}');
    }
}
