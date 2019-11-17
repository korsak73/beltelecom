<?php

use yii\db\Migration;

/**
 * Class m190529_140738_add_field_status
 */
class m190529_140738_add_field_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('categories', 'status', $this->smallInteger(2)->notNull()->defaultValue(0)->after('id'));
        $this->addColumn('tags', 'status', $this->smallInteger(2)->notNull()->defaultValue(0)->after('id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('categories', 'status');
        $this->dropColumn('tags', 'status');
    }
}
