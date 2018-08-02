<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wali_nikah".
 *
 * @property int $id
 * @property int $data_catin_id
 * @property int $status
 * @property string $status_wali
 * @property string $hubungan_wali
 * @property string $sebab_wali
 * @property string $nama
 * @property string $bin
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $no_ktp
 * @property string $kewarganegaraan
 * @property string $agama
 * @property string $pekerjaan
 * @property string $alamat
 * @property string $tanggal_surat
 * @property string $nama_pejabat_kua
 *
 * @property DataCatin $dataCatin
 */
class WaliNikah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wali_nikah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_catin_id', 'status'], 'integer'],
            [['alamat'], 'string'],
            [['status_wali', 'hubungan_wali', 'sebab_wali', 'nama', 'bin', 'tempat_lahir', 'tgl_lahir', 'no_ktp', 'kewarganegaraan', 'agama', 'pekerjaan', 'tanggal_surat', 'nama_pejabat_kua'], 'string', 'max' => 255],
            [['data_catin_id'], 'exist', 'skipOnError' => true, 'targetClass' => DataCatin::className(), 'targetAttribute' => ['data_catin_id' => 'id']],
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
            'status' => 'Status',
            'status_wali' => 'Status Wali',
            'hubungan_wali' => 'Hubungan Wali',
            'sebab_wali' => 'Sebab Wali',
            'nama' => 'Nama',
            'bin' => 'Bin',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'no_ktp' => 'No Ktp',
            'kewarganegaraan' => 'Kewarganegaraan',
            'agama' => 'Agama',
            'pekerjaan' => 'Pekerjaan',
            'alamat' => 'Alamat',
            'tanggal_surat' => 'Tanggal Surat',
            'nama_pejabat_kua' => 'Nama Pejabat Kua',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataCatin()
    {
        return $this->hasOne(DataCatin::className(), ['id' => 'data_catin_id']);
    }
}
