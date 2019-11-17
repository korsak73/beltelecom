<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m190316_202255_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(11),
            'text'=>$this->string(),
            'user_id'=>$this->integer(11),
            'article_id'=>$this->integer(11),
            'status'=>$this->integer()->defaultValue(0),
            'created_at' => $this->integer(11)->defaultValue(null),
            'updated_at' => $this->integer(11)->defaultValue(null)
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            'idx-article-user_id',
            'comments',
            'user_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-article-user_id',
            'comments',
            'user_id',
            'users',
            'id',
            'SET NULL',
            'CASCADE'
        );

        // creates index for column `article_id`
        $this->createIndex(
            'idx-article_id',
            'comments',
            'article_id'
        );

        // add foreign key for table `article`
        $this->addForeignKey(
            'fk-article_id',
            'comments',
            'article_id',
            'articles',
            'id',
            'SET NULL',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comments}}');
    }
}
