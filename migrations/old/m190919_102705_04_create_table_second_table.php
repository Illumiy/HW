<?php

use yii\db\Migration;

class m190919_102705_04_create_table_second_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%second_table}}', [
            'id' => $this->primaryKey(),
            'kek2' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('kek2', '{{%second_table}}', 'kek2');
    }

    public function down()
    {
        $this->dropTable('{{%second_table}}');
    }
}
