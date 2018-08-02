<?php

use yii\db\Migration;

/**
 * Class m180624_041318_tambah_status_kepengurusan
 */
class m180624_041318_tambah_status_kepengurusan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("data_catin", "status_kepengurusan", $this->smallInteger(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180624_041318_tambah_status_kepengurusan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180624_041318_tambah_status_kepengurusan cannot be reverted.\n";

        return false;
    }
    */
}
