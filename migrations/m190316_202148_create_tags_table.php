<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%tag}}`.
 */
class m190316_202148_create_tags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tags}}', [
            'id' => $this->primaryKey(11),
            'title'=>$this->string(),
            'slug'=>$this->string(),
            'created_at' => $this->integer(11)->defaultValue(null),
            'updated_at' => $this->integer(11)->defaultValue(null)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tags}}');
    }
}
