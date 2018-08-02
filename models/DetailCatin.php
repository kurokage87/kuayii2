<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_catin".
 *
 * @property int $id
 * @property int $data_catin_id
 * @property string $nama_istri_pertama
 * @property string $k_akta_nikah_pertama
 * @property string $no_akta_pertama
 * @property string $tgl_akta_pertama
 * @property string $nama_istri_kedua
 * @property string $k_akta_nikah_kedua
 * @property string $no_akta_kedua
 * @property string $tgl_akta_kedua
 * @property string $nama_istri_ketiga
 * @property string $k_akta_nikah_ketiga
 * @property string $no_akta_ketiga
 * @property string $tgl_akta_ketiga
 * @property string $izin_pengadilan
 * @property string $no_izin
 * @property string $tgl_izin
 * @property string $persetujuan_istri
 * @property string $tgl_persetujuan_istri
 *
 * @property DataCatin $dataCatin
 */
class DetailCatin extends \yii\db\ActiveRecord
{
    
    /**
     * @inheritdoc
     */
    public $akta1;
    public $akta2;
    public $akta3;
    public $scan_izin_p;
    public $scan_izin_istri;


    public static function tableName()
    {
        return 'detail_catin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_catin_id'], 'integer'],
            [['nama_istri_pertama', 'k_akta_nikah_pertama', 'no_akta_pertama', 'tgl_akta_pertama', 'nama_istri_kedua', 'k_akta_nikah_kedua', 'no_akta_kedua', 'tgl_akta_kedua', 'nama_istri_ketiga', 'k_akta_nikah_ketiga', 'no_akta_ketiga', 'tgl_akta_ketiga', 'izin_pengadilan', 'no_izin', 'tgl_izin', 'persetujuan_istri', 'tgl_persetujuan_istri'], 'string', 'max' => 255],
            [['data_catin_id'], 'exist', 'skipOnError' => true, 'targetClass' => DataCatin::className(), 'targetAttribute' => ['data_catin_id' => 'id']],
            [['akta1', 'akta2', 'akta3', 'scan_izin_p', 'scan_izin_istri'], 'image', 'skipOnEmpty' => true],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data_catin_id' => 'Data Catin ID',
            'nama_istri_pertama' => 'Nama Istri Pertama',
            'k_akta_nikah_pertama' => 'K Akta Nikah Pertama',
            'no_akta_pertama' => 'No Akta Pertama',
            'tgl_akta_pertama' => 'Tgl Akta Pertama',
            'nama_istri_kedua' => 'Nama Istri Kedua',
            'k_akta_nikah_kedua' => 'K Akta Nikah Kedua',
            'no_akta_kedua' => 'No Akta Kedua',
            'tgl_akta_kedua' => 'Tgl Akta Kedua',
            'nama_istri_ketiga' => 'Nama Istri Ketiga',
            'k_akta_nikah_ketiga' => 'K Akta Nikah Ketiga',
            'no_akta_ketiga' => 'No Akta Ketiga',
            'tgl_akta_ketiga' => 'Tgl Akta Ketiga',
            'izin_pengadilan' => 'Izin Pengadilan',
            'no_izin' => 'No Izin',
            'tgl_izin' => 'Tgl Izin',
            'persetujuan_istri' => 'Persetujuan Istri',
            'tgl_persetujuan_istri' => 'Tgl Persetujuan Istri',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataCatin()
    {
        return $this->hasOne(DataCatin::className(), ['id' => 'data_catin_id']);
    }
    
    public function upload()
    {
        if ($this->validate())
        {
            $this->akta1 == null ? "" : $this->akta1->saveAs(Yii::getAlias('@webroot/upload/detail_catin/'.$this->akta1->baseName.'.'.$this->akta1->extension));
            $this->akta2 == null ? "" : $this->akta2->saveAs(Yii::getAlias('@webroot/upload/detail_catin/'.$this->akta2->baseName.'.'.$this->akta2->extension));
            $this->akta3 == null ? "" : $this->akta3->saveAs(Yii::getAlias('@webroot/upload/detail_catin/'.$this->akta3->baseName.'.'.$this->akta3->extension));
            $this->scan_izin_istri == null ? "" : $this->scan_izin_istri->saveAs(Yii::getAlias('@webroot/upload/detail_catin/'.$this->scan_izin_istri->baseName.'.'.$this->scan_izin_istri->extension));
            $this->scan_izin_p == null ? "" : $this->scan_izin_p->saveAs(Yii::getAlias('@webroot/upload/detail_catin/'.$this->scan_izin_p->baseName.'.'.$this->scan_izin_p->extension));
            return true;
        }else{
            return false;
        }
    }
}
