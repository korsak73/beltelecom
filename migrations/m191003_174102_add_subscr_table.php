<?php

use yii\db\Migration;

/**
 * Class m191003_174102_add_subscr_table
 */
class m191003_174102_add_subscr_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%send_subscr}}', [
            'id' => $this->primaryKey(11),
            'post_id' => $this->integer(11)->notNull(),
            'subscriber_id' => $this->integer(11)->notNull(),
            'end' => $this->boolean()->defaultValue(0),
        ], $tableOptions);

        $this->insert('users', array(
            'name' => 'admin',
            'email'=>'korsak73@mail.ru',
            'password' => '$2y$13$o0jjnePwBE2EBRrbBbJ/neIfqFSyntSi/R8G.g3ZgVzNLLBglClgS',//1234
            'password_reset_token' => 'ExzkCOaYc1L8IOBs4wdTGGbgNiG3Wz1I_1402312317',
            'isAdmin' => 1,
            'status' => 2,
            'created_at' => '1402312317',
            'auth_key' => 'YdYu0tcbLSGWR9tschz6i2QYMXjkj1qU'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("
            delete from users where name = 'admin';
        
        ");

        $this->dropTable('{{%send_subscr}}');
    }
}
