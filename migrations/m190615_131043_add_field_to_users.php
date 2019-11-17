<?php

use yii\db\Migration;

/**
 * Class m190615_131043_add_field_to_users
 */
class m190615_131043_add_field_to_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'password_reset_token', $this->string(255)->defaultValue(null)->after('password'));
        $this->addColumn('users', 'ip', $this->string(20)->defaultValue(null)->after('status'));
        $this->addColumn('users', 'login_at', $this->integer(11)->defaultValue(null)->after('status'));
        $this->addColumn('users', 'document_id', $this->integer(11)->defaultValue(null)->after('status'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('users', 'password_reset_token');
        $this->dropColumn('users', 'login_at');
        $this->dropColumn('users', 'document_id');
        $this->dropColumn('users', 'ip');
    }
}
