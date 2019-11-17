<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%password_resets}}`.
 */
class m190318_171820_create_password_resets_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%password_resets}}', [
            'id' => $this->primaryKey(11),
            'email'=>$this->string()->notNull(),
            'token' =>$this->string()->defaultValue(null),
            'created_at' => $this->integer(11)->defaultValue(null),
            'updated_at' => $this->integer(11)->defaultValue(null)
        ]);

        // creates index for column `email`
        $this->createIndex(
            'idx-password_resets-email',
            'password_resets',
            'email'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops index for column `password_resets`
        $this->dropIndex(
            'idx-password_resets-email',
            'password_resets'
        );

        $this->dropTable('{{%password_resets}}');
    }
}
