<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190316_202213_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        $this->createTable('{{%users}}', [
//            'id' => $this->primaryKey(),
//            'name'=>$this->string(),
//            'email'=>$this->string(),
//            'password'=>$this->string()->defaultValue(null),
//            'isAdmin'=>$this->integer()->defaultValue(0),
//            'status'=>$this->integer()->defaultValue(0),
//            'avatar'=>$this->string()->defaultValue(null),
//            'remember_token' =>$this->string( 100)->defaultValue(null),
//            'email_verified_at' =>$this->timestamp()->defaultValue(null),
//            'created_at' =>$this->timestamp()->defaultValue(null),
//            'updated_at' =>$this->timestamp()->defaultValue(null)
//        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
//        $this->dropTable('{{%users}}');
    }
}
