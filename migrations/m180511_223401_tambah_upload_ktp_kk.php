<?php

use yii\db\Migration;

/**
 * Class m180511_223401_tambah_upload_ktp_kk
 */
class m180511_223401_tambah_upload_ktp_kk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('data_catin', 'file_ktp', $this->string());
        $this->addColumn('data_catin', 'file_kk', $this->string());
        $this->addColumn('orang_tua_catin', 'file_ktp', $this->string());
        $this->addColumn('orang_tua_catin', 'file_kk', $this->string());
        $this->addColumn('wali_nikah', 'file_ktp', $this->string());
        $this->addColumn('wali_nikah', 'file_kk', $this->string());
        $this->addColumn('profil', 'file_ktp', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180511_223401_tambah_upload_ktp_kk cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180511_223401_tambah_upload_ktp_kk cannot be reverted.\n";

        return false;
    }
    */
}
