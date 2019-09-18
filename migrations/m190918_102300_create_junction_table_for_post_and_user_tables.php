<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post_user}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%post}}`
 * - `{{%user}}`
 */
class m190918_102300_create_junction_table_for_post_and_user_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post_user}}', [
            'post_id' => $this->integer(),
            'user_id' => $this->integer(),
            'PRIMARY KEY(post_id, user_id)',
        ]);

        // creates index for column `post_id`
        $this->createIndex(
            '{{%idx-post_user-post_id}}',
            '{{%post_user}}',
            'post_id'
        );

        // add foreign key for table `{{%post}}`
        $this->addForeignKey(
            '{{%fk-post_user-post_id}}',
            '{{%post_user}}',
            'post_id',
            '{{%post}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-post_user-user_id}}',
            '{{%post_user}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-post_user-user_id}}',
            '{{%post_user}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%post}}`
        $this->dropForeignKey(
            '{{%fk-post_user-post_id}}',
            '{{%post_user}}'
        );

        // drops index for column `post_id`
        $this->dropIndex(
            '{{%idx-post_user-post_id}}',
            '{{%post_user}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-post_user-user_id}}',
            '{{%post_user}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-post_user-user_id}}',
            '{{%post_user}}'
        );

        $this->dropTable('{{%post_user}}');
    }
}
