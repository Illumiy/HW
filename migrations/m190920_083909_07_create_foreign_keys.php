<?php

use yii\db\Migration;

class m190920_083909_07_create_foreign_keys extends Migration
{
    public function up()
    {
            $this->addForeignKey('baba_is_you', '{{%ciforki}}', 'parent', '{{%ciforki}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        echo "m190920_083909_07_create_foreign_keys cannot be reverted.\n";
        return false;
    }
}
