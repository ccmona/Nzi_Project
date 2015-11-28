<?php

use yii\db\Migration;

class m151123_150607_del_test2 extends Migration
{
    public function up()
    {
            $this->dropTable("koszyk");
    }

    public function down()
    {
        echo "m151123_150607_del_test2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
