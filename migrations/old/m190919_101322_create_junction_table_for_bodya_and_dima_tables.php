<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bodya_dima}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%bodya}}`
 * - `{{%dima}}`
 */
class m190919_101322_create_junction_table_for_bodya_and_dima_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bodya_dima}}', [
            'bodya_id' => $this->integer(),
            'dima_id' => $this->integer(),
            'PRIMARY KEY(bodya_id, dima_id)',
        ]);

        // creates index for column `bodya_id`
        $this->createIndex(
            '{{%idx-bodya_dima-bodya_id}}',
            '{{%bodya_dima}}',
            'bodya_id'
        );

        // add foreign key for table `{{%bodya}}`
        $this->addForeignKey(
            '{{%fk-bodya_dima-bodya_id}}',
            '{{%bodya_dima}}',
            'bodya_id',
            '{{%bodya}}',
            'id',
            'CASCADE'
        );

        // creates index for column `dima_id`
        $this->createIndex(
            '{{%idx-bodya_dima-dima_id}}',
            '{{%bodya_dima}}',
            'dima_id'
        );

        // add foreign key for table `{{%dima}}`
        $this->addForeignKey(
            '{{%fk-bodya_dima-dima_id}}',
            '{{%bodya_dima}}',
            'dima_id',
            '{{%dima}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%bodya}}`
        $this->dropForeignKey(
            '{{%fk-bodya_dima-bodya_id}}',
            '{{%bodya_dima}}'
        );

        // drops index for column `bodya_id`
        $this->dropIndex(
            '{{%idx-bodya_dima-bodya_id}}',
            '{{%bodya_dima}}'
        );

        // drops foreign key for table `{{%dima}}`
        $this->dropForeignKey(
            '{{%fk-bodya_dima-dima_id}}',
            '{{%bodya_dima}}'
        );

        // drops index for column `dima_id`
        $this->dropIndex(
            '{{%idx-bodya_dima-dima_id}}',
            '{{%bodya_dima}}'
        );

        $this->dropTable('{{%bodya_dima}}');
    }
}
