<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publications_comment}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%publications}}`
 */
class m190525_182506_create_publications_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publications_comment}}', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'user_id' => $this->integer(),
            'publications_id' => $this->integer(),
            'status' => $this->integer(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-publications_comment-user_id}}',
            '{{%publications_comment}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-publications_comment-user_id}}',
            '{{%publications_comment}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `publications_id`
        $this->createIndex(
            '{{%idx-publications_comment-publications_id}}',
            '{{%publications_comment}}',
            'publications_id'
        );

        // add foreign key for table `{{%publications}}`
        $this->addForeignKey(
            '{{%fk-publications_comment-publications_id}}',
            '{{%publications_comment}}',
            'publications_id',
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
            '{{%fk-publications_comment-user_id}}',
            '{{%publications_comment}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-publications_comment-user_id}}',
            '{{%publications_comment}}'
        );

        // drops foreign key for table `{{%publications}}`
        $this->dropForeignKey(
            '{{%fk-publications_comment-publications_id}}',
            '{{%publications_comment}}'
        );

        // drops index for column `publications_id`
        $this->dropIndex(
            '{{%idx-publications_comment-publications_id}}',
            '{{%publications_comment}}'
        );

        $this->dropTable('{{%publications_comment}}');
    }
}
