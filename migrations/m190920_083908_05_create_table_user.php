<?php

use yii\db\Migration;

class m190920_083908_05_create_table_user extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'Name' => $this->string()->notNull(),
            'Password' => $this->string()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('Hewwo', '{{%user}}', 'id', '{{%user_bok}}', 'user_id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
