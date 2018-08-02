<?php

use yii\db\Migration;

/**
 * Class m180625_011825_hapus_penghulu_id
 */
class m180625_011825_hapus_penghulu_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pelaksanaan_nikah', 'note_kelengkapan', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180625_011825_hapus_penghulu_id cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180625_011825_hapus_penghulu_id cannot be reverted.\n";

        return false;
    }
    */
}
