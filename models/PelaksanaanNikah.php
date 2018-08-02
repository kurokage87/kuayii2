<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelaksanaan_nikah".
 *
 * @property int $id
 * @property int $user_id
 * @property string $hari_nikah
 * @property string $tgl_nikah
 * @property string $waktu
 * @property string $tempat
 * @property string $tgl_daftar
 * @property int $kec_id
 * @property string $kota
 * @property string $mas_kawin
 * @property string $pembayaran
 * @property string $no_perjanjian_kawin
 * @property string $tgl_surat_perjanjian
 * @property string $nama_notaris
 * @property int $status_nikah
 * @property int $id_suami 
 * @property int $id_istri 
 * @property string $note_kelengkapan
 * @property int $pilihan_lokasi 
 *
 * @property DataCatin $istri 
 * @property DataCatin $suami 
 * @property Kecamatan $kec
 * @property User $user
 * @property UploadBukti[] $uploadBuktis
 */
class PelaksanaanNikah extends \yii\db\ActiveRecord
{
    
    //constanta status_nikah
    const daftar_catin = 9;
    const daftar_nikah = 1;
    const diperiksa_pegawai_desa = 2;
    const disetujui_kepala_desa = 3;
    const diperiksa_pegawai_kua = 4;
    const disetujui_kepala_kua = 5;
    const lengkap_pegdes = 6;
    const lengkap_pegkua = 7;
    const lengkapi_kembali = 8;

    const nikah_kua = 1;
    const nikah_dirumah = 2;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelaksanaan_nikah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'kec_id', 'status_nikah', 'id_suami', 'id_istri', 'pilihan_lokasi'], 'integer'],
            [['tempat', 'note_kelengkapan'], 'string'],
            [['hari_nikah'], 'string', 'max' => 10],
            [['tgl_nikah', 'tgl_daftar', 'mas_kawin', 'pembayaran', 'no_perjanjian_kawin', 'tgl_surat_perjanjian', 'nama_notaris'], 'string', 'max' => 255],
            [['waktu'], 'string', 'max' => 25],
            [['kota'], 'string', 'max' => 50],
            [['kec_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['kec_id' => 'id']],
            [['id_istri'], 'exist', 'skipOnError' => true, 'targetClass' => DataCatin::className(), 'targetAttribute' => ['id_istri' => 'id']], 
            [['id_suami'], 'exist', 'skipOnError' => true, 'targetClass' => DataCatin::className(), 'targetAttribute' => ['id_suami' => 'id']], 
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'hari_nikah' => 'Hari Nikah',
            'tgl_nikah' => 'Tgl Nikah',
            'waktu' => 'Waktu',
            'tempat' => 'Tempat',
            'tgl_daftar' => 'Tgl Daftar',
            'kec_id' => 'Kec ID',
            'kota' => 'Kota',
            'mas_kawin' => 'Mas Kawin',
            'pembayaran' => 'Pembayaran',
            'no_perjanjian_kawin' => 'No Perjanjian Kawin',
            'tgl_surat_perjanjian' => 'Tgl Surat Perjanjian',
            'nama_notaris' => 'Nama Notaris',
            'status_nikah' => 'Status Nikah',
            'id_suami' => 'Id Suami', 
            'id_istri' => 'Id Istri', 
            'note_kelengkapan' => 'Pesan Kelengkapan',
            'pilihan_lokasi' => 'Pilihan Lokasi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKec()
    {
        return $this->hasOne(Kecamatan::className(), ['id' => 'kec_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
     /** 
    * @return \yii\db\ActiveQuery 
    */ 
    
    public function getIstri() 
    { 
        return $this->hasOne(DataCatin::className(), ['id' => 'id_istri']); 
    } 

    /** 
     * @return \yii\db\ActiveQuery 
     */ 
    public function getSuami() 
    { 
        return $this->hasOne(DataCatin::className(), ['id' => 'id_suami']); 
    }
    
    /**
    * @return \yii\db\ActiveQuery
    */
   public function getUploadBuktis()
   {
       return $this->hasMany(UploadBukti::className(), ['pelaksanaan_nikah_id' => 'id']);
   }
}
