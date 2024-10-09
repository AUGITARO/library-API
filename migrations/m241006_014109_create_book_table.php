<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m241006_014109_create_book_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey()->notNull()->unsigned(),
            'name' => $this->string()->notNull()->unique()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
