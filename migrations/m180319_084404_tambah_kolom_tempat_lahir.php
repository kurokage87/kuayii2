<?php

use yii\db\Migration;

/**
 * Class m180319_084404_tambah_kolom_tempat_lahir
 */
class m180319_084404_tambah_kolom_tempat_lahir extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('data_catin', 'tempat_lahir', $this->string()->null());
        $this->addColumn('orang_tua_catin', 'tempat_lahir', $this->string()->null());
        $this->addColumn('profil', 'tempat_lahir', $this->string()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180319_084404_tambah_kolom_tempat_lahir cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180319_084404_tambah_kolom_tempat_lahir cannot be reverted.\n";

        return false;
    }
    */
}
