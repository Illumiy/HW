<?php

use yii\db\Migration;

class m190920_083908_03_create_table_user_bok extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_bok}}', [
            'bok_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('Bok_id', '{{%user_bok}}', 'bok_id');
        $this->createIndex('User_id', '{{%user_bok}}', 'user_id');
    }

    public function down()
    {
        $this->dropTable('{{%user_bok}}');
    }
}
