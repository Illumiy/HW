<?php

use yii\db\Migration;

class m190919_102705_03_create_table_123_1234 extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%123_1234}}', [
            'id_kek4' => $this->integer()->notNull(),
            'id_kek3' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('id_kek4', '{{%123_1234}}', 'id_kek4');
        $this->createIndex('id_kek3', '{{%123_1234}}', 'id_kek3');
        $this->addForeignKey('svyaz2', '{{%123_1234}}', 'id_kek3', '{{%123}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('svyaz3', '{{%123_1234}}', 'id_kek4', '{{%1234}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%123_1234}}');
    }
}
