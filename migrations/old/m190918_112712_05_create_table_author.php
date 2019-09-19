<?php

use yii\db\Migration;

class m190918_112712_05_create_table_author extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%author}}', [
            'id' => $this->primaryKey(),
            'Name' => $this->string()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('Roar_xd', '{{%author}}', 'id', '{{%bok}}', 'author_id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%author}}');
    }
}
