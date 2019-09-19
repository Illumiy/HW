<?php

use yii\db\Migration;

class m190918_112711_01_create_table_shutka_of_day extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%shutka_of_day}}', [
            'id' => $this->primaryKey(),
            'Body' => $this->text()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%shutka_of_day}}');
    }
}
