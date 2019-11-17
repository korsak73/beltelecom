<?php

use yii\db\Migration;

/**
 * Class m190402_195447_add_column_to_users
 */
class m190402_195447_add_column_to_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'auth_key', $this->string(255)->after('avatar'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190402_195447_add_column_to_users cannot be reverted.\n";
        $this->dropColumn('users', 'auth_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190402_195447_add_column_to_users cannot be reverted.\n";

        return false;
    }
    */
}
