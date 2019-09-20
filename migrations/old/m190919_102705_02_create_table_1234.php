<?php

use yii\db\Migration;

class m190919_102705_02_create_table_1234 extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%1234}}', [
            'id' => $this->primaryKey(),
            'kek4' => $this->integer()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%1234}}');
    }
}
