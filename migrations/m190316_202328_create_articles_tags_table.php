<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article_tag}}`.
 */
class m190316_202328_create_articles_tags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%articles_tags}}', [
            'id' => $this->primaryKey(11),
            'article_id'=>$this->integer(),
            'tag_id'=>$this->integer()
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            'tag_article_article_id',
            'articles_tags',
            'article_id'
        );


        // add foreign key for table `user`
        $this->addForeignKey(
            'tag_article_article_id',
            'articles_tags',
            'article_id',
            'articles',
            'id',
            'SET NULL',
            'CASCADE'

        );

        // creates index for column `user_id`
        $this->createIndex(
            'idx_tag_id',
            'articles_tags',
            'tag_id'
        );


        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tag_id',
            'articles_tags',
            'tag_id',
            'tags',
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
        $this->dropTable('{{%articles_tags}}');
    }
}
