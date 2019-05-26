<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publications_comments}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%publications}}`
 */
class m190525_182506_create_publications_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publications_comments}}', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'user_id' => $this->integer(),
            'publication_id' => $this->integer(),
            'status' => $this->integer(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-publications_comments-user_id}}',
            '{{%publications_comments}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-publications_comments-user_id}}',
            '{{%publications_comments}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `publication_id`
        $this->createIndex(
            '{{%idx-publications_comments-publication_id}}',
            '{{%publications_comments}}',
            'publication_id'
        );

        // add foreign key for table `{{%publications}}`
        $this->addForeignKey(
            '{{%fk-publications_comments-publication_id}}',
            '{{%publications_comments}}',
            'publication_id',
            '{{%publications}}',
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
            '{{%fk-publications_comments-user_id}}',
            '{{%publications_comments}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-publications_comments-user_id}}',
            '{{%publications_comment}}'
        );

        // drops foreign key for table `{{%publications}}`
        $this->dropForeignKey(
            '{{%fk-publications_comments-publication_id}}',
            '{{%publications_comments}}'
        );

        // drops index for column `publication_id`
        $this->dropIndex(
            '{{%idx-publications_comments-publication_id}}',
            '{{%publications_comments}}'
        );

        $this->dropTable('{{%publications_comments}}');
    }
}
