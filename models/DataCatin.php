<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_catin".
 *
 * @property int $id
 * @property int $user_id
 * @property string $nama_lengkap
 * @property string $tempat_tgl_lahir
 * @property string $no_ktp
 * @property string $kewarganearaan
 * @property string $pekerjaan
 * @property string $agama
 * @property string $alamat
 * @property int $status_data
 * @property string $foto
 * @property string $nasab_a
 * @property string $nasab_b
 * @property string $nasab_c
 * @property string $nama_pejabat_pemberi_izin
 * @property string $nomor_izin_pejabat
 * @property string $tgl_izin_surat
 * @property string $wna_instansi
 * @property string $wna_no_izin
 * @property string $wna_tgl_surat
 * @property string $izin_pengadilan_belum_umur
 * @property string $no_izin_pengadilan_belum_umur
 * @property string $tgl_izin_pengadilan_belum_umur
 * @property string $nama_pemeberi_izin
 * @property string $hubungan_keluarga
 * @property string $tgl_surat
 * @property string $tempat_lahir
 * @property int $status_perkawinan
 * @property string $nama_pasangan_sebelumnya
 * @property string $bukti_carai_instansi
 * @property string $bukti_cerai_no
 * @property string $tanggal_cerai
 * @property int $pernikahan_ke
 * @property string $file_ktp
 * @property string $file_kk 
 *
 * @property User $user
 * @property DetailCatin[] $detailCatins
 * @property OrangTuaCatin[] $orangTuaCatins
 * @property WaliNikah[] $waliNikahs
 */
class DataCatin extends \yii\db\ActiveRecord
{
    const suami = 1;
    const istri = 2;
    const perjaka = 11;
    const duda = 12;
    const beristri = 13;
    const perawan = 14;
    const janda = 15;
    
    //variabel upload kelengkapan
    public $image;
    public $ktp;
    public $kk;
    
    // variabel upload file pendukung
    public $bukti_cerai;
    public $izin_belum_umur;
    public $izin_pejabat;
    public $izin_wna;




    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_catin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'status_data', 'status_perkawinan', 'pernikahan_ke'], 'integer'],
            [['alamat'], 'string'],
            [['nama_lengkap', 'tempat_tgl_lahir', 'no_ktp', 'kewarganearaan', 'pekerjaan', 'agama', 'foto', 'nasab_a', 'nasab_b', 'nasab_c', 'nama_pejabat_pemberi_izin', 'nomor_izin_pejabat', 'tgl_izin_surat', 'wna_instansi', 'wna_no_izin', 'wna_tgl_surat', 'izin_pengadilan_belum_umur', 'no_izin_pengadilan_belum_umur', 'tgl_izin_pengadilan_belum_umur', 'nama_pemeberi_izin', 'hubungan_keluarga', 'tgl_surat', 'tempat_lahir', 'nama_pasangan_sebelumnya', 'bukti_carai_instansi', 'bukti_cerai_no', 'tanggal_cerai', 'file_ktp', 'file_kk'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['image','ktp','kk','bukti_cerai', 'izin_belum_umur', 'izin_pejabat', 'izin_wna'],'image', 'skipOnEmpty' => true]
            
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
            'nama_lengkap' => 'Nama Lengkap',
            'tempat_tgl_lahir' => 'Tempat Tgl Lahir',
            'no_ktp' => 'No Ktp',
            'kewarganearaan' => 'Kewarganearaan',
            'pekerjaan' => 'Pekerjaan',
            'agama' => 'Agama',
            'alamat' => 'Alamat',
            'status_data' => 'Status Data',
            'foto' => 'Foto',
            'nasab_a' => 'Nasab A',
            'nasab_b' => 'Nasab B',
            'nasab_c' => 'Nasab C',
            'nama_pejabat_pemberi_izin' => 'Nama Pejabat Pemberi Izin',
            'nomor_izin_pejabat' => 'Nomor Izin Pejabat',
            'tgl_izin_surat' => 'Tgl Izin Surat',
            'wna_instansi' => 'Wna Instansi',
            'wna_no_izin' => 'Wna No Izin',
            'wna_tgl_surat' => 'Wna Tgl Surat',
            'izin_pengadilan_belum_umur' => 'Izin Pengadilan Belum Umur',
            'no_izin_pengadilan_belum_umur' => 'No Izin Pengadilan Belum Umur',
            'tgl_izin_pengadilan_belum_umur' => 'Tgl Izin Pengadilan Belum Umur',
            'nama_pemeberi_izin' => 'Nama Pemeberi Izin',
            'hubungan_keluarga' => 'Hubungan Keluarga',
            'tgl_surat' => 'Tgl Surat',
            'tempat_lahir' => 'Tempat Lahir',
            'status_perkawinan' => 'Status Perkawinan',
            'nama_pasangan_sebelumnya' => 'Nama Pasangan Sebelumnya',
            'bukti_carai_instansi' => 'Bukti Carai Instansi',
            'bukti_cerai_no' => 'Bukti Cerai No',
            'tanggal_cerai' => 'Tanggal Cerai',
            'pernikahan_ke' => 'Pernikahan Ke',
            'file_ktp' => 'Scan KTP',
            'file_kk' => 'Scan KK'
        ];
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
    public function getDetailCatins()
    {
        return $this->hasMany(DetailCatin::className(), ['data_catin_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrangTuaCatins()
    {
        return $this->hasMany(OrangTuaCatin::className(), ['data_catin_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWaliNikahs()
    {
        return $this->hasMany(WaliNikah::className(), ['data_catin_id' => 'id']);
    }
    
    public function getPelaksanaanNikah(){
        return $this->hasMany(PelaksanaanNikah::className(), ['user_id' => 'user_id']);
    }

        public function upload()
    {
        if ($this->validate())
        {
            $this->image == null ? "" : $this->image->saveAs(Yii::getAlias('@webroot/upload/data-catin/'.$this->image->baseName.'.'.$this->image->extension));
            $this->ktp == null ? "" : $this->ktp->saveAs(Yii::getAlias('@webroot/upload/data-catin/ktp/'.$this->ktp->baseName.'.'.$this->ktp->extension));
            $this->kk == null ? "" : $this->kk->saveAs(Yii::getAlias('@webroot/upload/data-catin/kk/'.$this->kk->baseName.'.'.$this->kk->extension));
            $this->izin_belum_umur == null ? "" : $this->izin_belum_umur->saveAs(Yii::getAlias('@webroot/upload/data-catin/izin_belum_umur/'.$this->izin_belum_umur->baseName.'.'.$this->izin_belum_umur->extension));
            $this->izin_pejabat == null ? "" : $this->izin_pejabat->saveAs(Yii::getAlias('@webroot/upload/data-catin/izin_pejabat/'.$this->izin_pejabat->baseName.'.'.$this->izin_pejabat->extension));
            $this->izin_wna == null ? "" : $this->izin_wna->saveAs(Yii::getAlias('@webroot/upload/data-catin/izin_wna/'.$this->izin_wna->baseName.'.'.$this->izin_wna->extension));
            $this->bukti_cerai == null ? "" : $this->bukti_cerai->saveAs(Yii::getAlias('@webroot/upload/data-catin/bukti_cerai/'.$this->bukti_cerai->baseName.'.'.$this->bukti_cerai->extension));
            return true;
        }else{
            return false;
        }
    }   
}
