<?php

use yii\db\Migration;

class m190920_083908_01_create_table_ciforki extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ciforki}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'parent' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('parent', '{{%ciforki}}', 'parent');
    }

    public function down()
    {
        $this->dropTable('{{%ciforki}}');
    }
}
