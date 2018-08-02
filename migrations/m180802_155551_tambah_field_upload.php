<?php

use yii\db\Migration;

/**
 * Class m180802_155551_tambah_field_upload
 */
class m180802_155551_tambah_field_upload extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pelaksanaan_nikah', 'pilihan_lokasi', $this->integer());
        
        $this->createTable('upload_bukti', [
            'id' => $this->primaryKey(),
            'pelaksanaan_nikah_id' => $this->integer(),
            'nama_rek' => $this->string(),
            'nama_bank' => $this->string(),
            'tanggal_kirim' => $this->date(),
            'foto' => $this->string()
        ]);
        
        $this->addForeignKey('fk-upload_bukti-pelaksanaan_nikah_id-pelaksanaan_nikah-id', 'upload_bukti', 'pelaksanaan_nikah_id', 'pelaksanaan_nikah', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180802_155551_tambah_field_upload cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180802_155551_tambah_field_upload cannot be reverted.\n";

        return false;
    }
    */
}
