<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publications_category}}`.
 */
class m190525_170408_create_publications_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publications_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%publications_category}}');
    }
}
