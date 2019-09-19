<?php

use yii\db\Migration;

class m190918_112712_03_create_table_bok extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%bok}}', [
            'id' => $this->primaryKey(),
            'Name' => $this->string()->notNull(),
            'author_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('author_book', '{{%bok}}', 'author_id');
        $this->addForeignKey('UwU', '{{%bok}}', 'id', '{{%user_bok}}', 'bok_id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%bok}}');
    }
}
