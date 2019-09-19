<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bodya}}`.
 */
class m190919_101052_create_bodya_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bodya}}', [
            'id' => $this->primaryKey(),
            'name' => $this->varchar(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bodya}}');
    }
}
