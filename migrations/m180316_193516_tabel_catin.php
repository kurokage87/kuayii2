<?php

use yii\db\Migration;

/**
 * Class m180316_193516_tabel_catin
 */
class m180316_193516_tabel_catin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('profil', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'nama' =>  $this->string()->null(),
            'tempat_tgl_lahir' => $this->string()->null(),
            'no_ktp' => $this->string()->null(),
            'alamat' => $this->text()->null(),
            'agama' => $this->string()->null(),
            'no_telp' => $this->string()->null(),
            'foto' => $this->string()->null(),
        ]);
        
        $this->createTable('data_catin', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'nama_lengkap' => $this->string()->null(),
            'tempat_tgl_lahir' => $this->string()->null(),
            'no_ktp' => $this->string()->null(),
            'kewarganearaan' => $this->string()->null(),
            'pekerjaan' => $this->string()->null(),
            'agama' => $this->string()->null(),
            'alamat' => $this->text()->null(),
            'status_data' => $this->smallInteger(),
            'foto' => $this->string()->null(),
            'nasab_a' => $this->string()->null(),
            'nasab_b' => $this->string()->null(),
            'nasab_c' => $this->string()->null(),
            'nama_pejabat_pemberi_izin' => $this->string()->null(),
            'nomor_izin_pejabat' => $this->string()->null(),
            'tgl_izin_surat' => $this->string()->null(),
            'wna_instansi' => $this->string()->null(),
            'wna_no_izin' => $this->string()->null(),
            'wna_tgl_surat' => $this->string()->null(),
            'izin_pengadilan_belum_umur' => $this->string()->null(),
            'no_izin_pengadilan_belum_umur' => $this->string()->null(),
            'tgl_izin_pengadilan_belum_umur' => $this->string()->null(),
            'nama_pemeberi_izin' => $this->string()->null(),
            'hubungan_keluarga' => $this->string()->null(),
            'tgl_surat' => $this->string()->null()
        ]);
        
        $this->createTable('orang_tua_catin', [
            'id' => $this->primaryKey(),
            'data_catin_id' => $this->integer(),
            'nama_lengkap' => $this->string()->null(),
            'tempat_tgl_lahir' => $this->string()->null(),
            'no_ktp' => $this->string()->null(),
            'kewarganearaan' => $this->string()->null(),
            'pekerjaan' => $this->string()->null(),
            'agama' => $this->string()->null(),
            'alamat' => $this->text()->null(),
            'status_keluarga' => $this->smallInteger(), 
        ]);
        
        $this->addForeignKey('fk-profil-user_id-user-id', 'profil', 'user_id', 'user', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk-data_catin-user-id-user-id', 'data_catin', 'user_id', 'user', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk-orang_tua_catin-data_catin_id-data_catin-id', 'orang_tua_catin', 'data_catin_id', 'data_catin', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180316_193516_tabel_catin cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180316_193516_tabel_catin cannot be reverted.\n";

        return false;
    }
    */
}
