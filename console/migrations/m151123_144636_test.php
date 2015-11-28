<?php

use yii\db\Migration;

class m151123_144636_test extends Migration
{
    public function up()
    {
        $this->execute('DROP TABLE koszyk');
    }

    public function down()
    {
        echo "m151123_144636_test cannot be reverted.\n";

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
