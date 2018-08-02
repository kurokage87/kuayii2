<?php

use yii\db\Migration;

/**
 * Class m180321_024050_tabel_pelaksanaan_nikah
 */
class m180321_024050_tabel_pelaksanaan_nikah extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('kecamatan', [
            'id' => $this->primaryKey(),
            'nama_kec' => $this->string()->null(),
        ]);
        
        $this->createTable('pelaksanaan_nikah', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'penguhulu_id' => $this->integer(),
            'hari_nikah' => $this->string(10)->null(),
            'tgl_nikah' => $this->string()->null(),
            'waktu' => $this->string(25)->null(),
            'tempat' => $this->text(),
            'tgl_daftar' => $this->string(),
            'kec_id' => $this->integer(),
            'kota' => $this->string(50),
            'mas_kawin' => $this->string()->null(),
            'pembayaran' => $this->string()->null(),
            'no_perjanjian_kawin' => $this->string()->null(),
            'tgl_surat_perjanjian' => $this->string()->null(),
            'nama_notaris' => $this->string()->null()
        ]);        
            
        $this->createTable('detail_catin', [
            'id' => $this->primaryKey(),
            'data_catin_id' => $this->integer(),
            'nama_istri_pertama' => $this->string()->null(),
            'k_akta_nikah_pertama' => $this->string()->null(),
            'no_akta_pertama' => $this->string()->null(),
            'tgl_akta_pertama' => $this->string()->null(),
            'nama_istri_kedua' => $this->string()->null(),
            'k_akta_nikah_kedua' => $this->string()->null(),
            'no_akta_kedua' => $this->string()->null(),
            'tgl_akta_kedua' => $this->string()->null(),
            'nama_istri_ketiga' => $this->string()->null(),
            'k_akta_nikah_ketiga' => $this->string()->null(),
            'no_akta_ketiga' => $this->string()->null(),
            'tgl_akta_ketiga' => $this->string()->null(),
            'izin_pengadilan' => $this->string()->null(),
            'no_izin' => $this->string()->null(),
            'tgl_izin' => $this->string()->null(),
            'persetujuan_istri' => $this->string()->null(),
            'tgl_persetujuan_istri' => $this->string()->null(),
        ]);
        
        $this->createTable('wali_nikah', [
            'id' => $this->primaryKey(),
            'data_catin_id' => $this->integer(),
            'status' => $this->smallInteger(),
            'status_wali' => $this->string(),
            'hubungan_wali' => $this->string(),
            'sebab_wali' => $this->string(),
            'nama' => $this->string(),
            'bin' => $this->string(),
            'tempat_lahir' => $this->string(),
            'tgl_lahir' => $this->string(),
            'no_ktp' => $this->string(),
            'kewarganegaraan' => $this->string(),
            'agama' => $this->string(),
            'pekerjaan' => $this->string(),
            'alamat' => $this->text(),
            'tanggal_surat' => $this->string(),
            'nama_pejabat_kua' => $this->string()
        ]);
            
        //tambah kolom yang kurang
        $this->addColumn('profil', 'jabatan', $this->string());
        $this->addColumn('profil', 'kec_id', $this->integer());
        $this->addColumn('data_catin', 'status_perkawinan', $this->smallInteger());
        $this->addColumn('data_catin', 'nama_pasangan_sebelumnya', $this->string()->null());
        $this->addColumn('data_catin', 'bukti_carai_instansi', $this->string()->null());
        $this->addColumn('data_catin', 'bukti_cerai_no', $this->string()->null());
        $this->addColumn('data_catin', 'tanggal_cerai', $this->string()->null());
        $this->addColumn('data_catin', 'pernikahan_ke', $this->integer()->null());
        
        
        //untuk membuat relasi
        $this->addForeignKey('fk-profil-kec_id-kecamatan-id', 'profil', 'kec_id', 'kecamatan', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk-pelaksanaan_nikah-user_id-user-id', 'pelaksanaan_nikah', 'user_id', 'user', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk-pelaksanaan_nikah-penguhulu_id-user-id', 'pelaksanaan_nikah', 'penguhulu_id', 'user', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk-pelaksanaan_nikah-kec_id-kecamatan-id', 'pelaksanaan_nikah', 'kec_id', 'kecamatan', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk-wali_nikah-data_catin_id-data_catin_id', 'wali_nikah', 'data_catin_id', 'data_catin', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk-detail_catin-data_catin_id-data_catin-id', 'detail_catin', 'data_catin_id', 'data_catin', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180321_024050_tabel_pelaksanaan_nikah cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180321_024050_tabel_pelaksanaan_nikah cannot be reverted.\n";

        return false;
    }
    */
}
