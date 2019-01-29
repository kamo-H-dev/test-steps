<?php

use yii\db\Migration;

/**
 * Handles the creation of table `steps`.
 */
class m190129_064507_create_steps_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('steps', [
            'id' => $this->primaryKey(),
            'step' => $this->integer()->notNull(),
            'step_name' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('steps');
    }
}
