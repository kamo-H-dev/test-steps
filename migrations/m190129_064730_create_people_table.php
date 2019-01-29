<?php

use yii\db\Migration;

/**
 * Handles the creation of table `people`.
 */
class m190129_064730_create_people_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('people', [
            'id' => $this->primaryKey(),
            'step_id' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('people');
    }
}
