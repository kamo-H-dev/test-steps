<?php

use yii\db\Migration;

/**
 * Class m190129_104718_create_seeder_for_steps_people_tables
 */
class m190129_104718_create_seeder_for_steps_people_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $seeder = new \tebazil\yii2seeder\Seeder();
        $array =
            [
                [1, 1, "First step"],
                [2, 3, "Third step"],
                [3, 2, "Second step"]
            ];
        $columnConfig = [false, 'step', 'step_name'];
        $seeder->table('steps')->data($array, $columnConfig)->rowQuantity(3);

        $array =
            [
                [1,1],
                [2,2],
                [3,1],
                [4,3],
                [5,2],
                [6,3],
                [7,1],
                [8,2],
                [9,1],
            ];
        $columnConfig = [false, 'step_id'];

        $seeder->table('people')->data($array, $columnConfig)->rowQuantity(9);
        $seeder->refill();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190129_104718_create_seeder_for_steps_people_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190129_104718_create_seeder_for_steps_people_tables cannot be reverted.\n";

        return false;
    }
    */
}
