<?php

use yii\db\Migration;

/**
 * Class m180624_041936_hapus_status_kepengurusan
 */
class m180624_041936_hapus_status_kepengurusan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn("data_catin", "status_kepengurusan");
    }  

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180624_041936_hapus_status_kepengurusan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180624_041936_hapus_status_kepengurusan cannot be reverted.\n";

        return false;
    }
    */
}
