<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dima}}`.
 */
class m190919_101210_create_dima_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dima}}', [
            'id' => $this->primaryKey(),
            'name' => $this->varchar(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dima}}');
    }
}
