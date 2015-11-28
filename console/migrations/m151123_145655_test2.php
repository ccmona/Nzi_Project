<?php

use yii\db\Migration;

class m151123_145655_test2 extends Migration
{
    public function up()
    {
        //$this->execute('');
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('{{%koszyk}}', [
            'id' => $this->primaryKey(),
            'id_prod' => $this->integer()->notNull(),
            'date' => $this->integer()->notNull(),
        ], $tableOptions);
                
    }

    public function down()
    {
        echo "m151123_145655_test2 cannot be reverted.\n";

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
