<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publications}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%publications_categories}}`
 */
class m190525_174326_create_publications_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publications}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->string(),
            'content' => $this->string(),
            'image' => $this->string(),
            'user_id' => $this->integer(),
            'date' => $this->date(),
            'publications_category_id' => $this->integer(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-publications-user_id}}',
            '{{%publications}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-publications-user_id}}',
            '{{%publications}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `publications_category_id`
        $this->createIndex(
            '{{%idx-publications-publications_category_id}}',
            '{{%publications}}',
            'publications_category_id'
        );

        // add foreign key for table `{{%publications_categories}}`
        $this->addForeignKey(
            '{{%fk-publications-publications_category_id}}',
            '{{%publications}}',
            'publications_category_id',
            '{{%publications_categories}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-publications-user_id}}',
            '{{%publications}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-publications-user_id}}',
            '{{%publications}}'
        );

        // drops foreign key for table `{{%publications_categories}}`
        $this->dropForeignKey(
            '{{%fk-publications-publications_category_id}}',
            '{{%publications}}'
        );

        // drops index for column `publications_category_id`
        $this->dropIndex(
            '{{%idx-publications-publications_category_id}}',
            '{{%publications}}'
        );

        $this->dropTable('{{%publications}}');
    }
}
