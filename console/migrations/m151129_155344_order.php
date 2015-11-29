<?php

use yii\db\Migration;

class m151129_155344_order extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
           $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%order}}', [
            'order_id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'date_time' => $this->datetime()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('user_id','{{%order}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
        //$this->addForeignKey('fk_id','{{%user}}', 'id', '{{%order}}', 'order_id', 'CASCADE', 'CASCADE');        
    }

    public function down()
    {
        
        $this->dropTable("order");
        echo "m151129_155344_order cannot be reverted.\n";

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
