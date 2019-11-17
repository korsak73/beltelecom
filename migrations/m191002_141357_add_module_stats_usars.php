<?php

use yii\db\Migration;

/**
 * Class m191002_141357_add_module_stats_usars
 */
class m191002_141357_add_module_stats_usars extends Migration
{
    private $ksl_ip_count = 'ksl_ip_count';
    private $ksl_ip_bots = 'ksl_ip_bots';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        if (in_array($this->ksl_ip_count, $this->getDb()->schema->tableNames)) {
            $this->dropTable($this->ksl_ip_count);
        }

        if (in_array($this->ksl_ip_bots, $this->getDb()->schema->tableNames)) {
            $this->dropTable($this->ksl_ip_bots);
        }

//        //Создание таблицы IP пользователей
        $this->createTable('{{%ksl_ip_count}}', [
            'id' => $this->primaryKey(),
            'ip' => $this->string(15)->notNull(),
            'str_url' => $this->string(255),
            'date_ip' => $this->integer(11),
            'black_list_ip' => $this->boolean()->defaultValue(0)->notNull(),
            'comment' => $this->string(255),
        ], $tableOptions);

        //Создание таблицы IP ботов
        $this->createTable('{{%ksl_ip_bots}}', [
            'id_bot' => $this->primaryKey(),
            'bot_ip' => $this->string(15)->notNull(),
            'str_url' => $this->string(255),
            'bot_name' => $this->string(255),
            'date' => $this->integer(11)

        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ksl_ip_count}}');
        $this->dropTable('{{%ksl_ip_bots}}');
    }
}
