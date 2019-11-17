<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m190316_201958_create_users_categories_articles_table extends Migration
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

        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(255)->notNull(),
            'email'=>$this->string(),
            'password'=>$this->string()->defaultValue(null),
            'isAdmin'=>$this->integer()->defaultValue(0),
            'status'=>$this->integer()->defaultValue(0),
            'avatar'=>$this->string()->defaultValue(null),
            'remember_token' =>$this->string( 100)->defaultValue(null),
            'email_verified_at' => Schema::TYPE_DATETIME . ' NULL',
            'created_at' => $this->integer(11)->defaultValue(null),
            'updated_at' => $this->integer(11)->defaultValue(null)
        ], $tableOptions);

        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(11),
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'slug' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => $this->integer(11)->defaultValue(null),
            'updated_at' => $this->integer(11)->defaultValue(null)
        ], $tableOptions);

        $this->createTable('{{%articles}}', [
            'id' => $this->primaryKey(11),
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'slug' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'category_id' =>$this->integer(11)->defaultValue(null),
            'author_id' =>$this->integer(11)->defaultValue(null),
            'status'=>$this->integer()->defaultValue(0),
//            'publish_status' => "enum('" . Post::STATUS_DRAFT . "','" . Post::STATUS_PUBLISH . "') NOT NULL DEFAULT '" . Post::STATUS_DRAFT . "'",
            'publish_date' => Schema::TYPE_DATETIME . ' NULL',
            'viewed'=>$this->integer()->defaultValue(0),
            'is_featured'=>$this->integer()->defaultValue(0),
            'image'=>$this->string()->defaultValue(null),
            'created_at' => $this->integer(11)->defaultValue(null),
            'updated_at' => $this->integer(11)->defaultValue(null)
        ], $tableOptions);

        $this->createIndex('idx_articles_author', '{{%articles}}', 'author_id');
        $this->addForeignKey(
            'fk_articles_author', '{{%articles}}', 'author_id', '{{%users}}', 'id', 'SET NULL', 'CASCADE'
        );

        $this->createIndex('idx_articles_categories', '{{%articles}}', 'category_id');
        $this->addForeignKey(
            'fk_articles_categories', '{{%articles}}', 'category_id', '{{%categories}}', 'id', 'SET NULL', 'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
        $this->dropTable('{{%articles}}');
        $this->dropTable('{{%categories}}');
    }
}
