<?php

use yii\db\Schema;
use yii\db\Migration;

class m140804_015242_create_airport_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%airport}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'iata' => Schema::TYPE_STRING . '(3) NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        echo "m140804_015242_create_airport_table cannot be reverted.\n";

        return false;
    }
}
