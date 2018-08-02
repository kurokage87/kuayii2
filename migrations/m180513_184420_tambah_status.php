<?php

use yii\db\Migration;

/**
 * Class m180513_184420_tambah_status
 */
class m180513_184420_tambah_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pelaksanaan_nikah', 'status_nikah', $this->smallInteger());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180513_184420_tambah_status cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180513_184420_tambah_status cannot be reverted.\n";

        return false;
    }
    */
}
