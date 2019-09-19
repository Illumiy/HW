<?php

use yii\db\Migration;

class m190919_102705_05_create_table_first_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%first_table}}', [
            'id' => $this->primaryKey(),
            'kek1' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('kek1', '{{%first_table}}', 'kek1');
        $this->addForeignKey('svyaz', '{{%first_table}}', 'kek1', '{{%second_table}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%first_table}}');
    }
}
