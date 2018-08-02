<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orang_tua_catin".
 *
 * @property int $id
 * @property int $data_catin_id
 * @property string $nama_lengkap
 * @property string $tempat_tgl_lahir
 * @property string $no_ktp
 * @property string $kewarganearaan
 * @property string $pekerjaan
 * @property string $agama
 * @property string $alamat
 * @property int $status_keluarga
 * @property string $tempat_lahir
 * @property string $file_ktp
 * @property string $file_kk
 *
 * @property DataCatin $dataCatin
 */
class OrangTuaCatin extends \yii\db\ActiveRecord
{
    const ayah = 1;
    const ibu = 2;
    
    public $ktp;
    public $kk;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orang_tua_catin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_catin_id', 'status_keluarga'], 'integer'],
            [['alamat'], 'string'],
            [['nama_lengkap', 'tempat_tgl_lahir', 'no_ktp', 'kewarganearaan', 'pekerjaan', 'agama', 'tempat_lahir'], 'string', 'max' => 255],
            [['data_catin_id'], 'exist', 'skipOnError' => true, 'targetClass' => DataCatin::className(), 'targetAttribute' => ['data_catin_id' => 'id']],
            [['ktp','kk'],'image', 'skipOnEmpty' => true],
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
            'nama_lengkap' => 'Nama Lengkap',
            'tempat_tgl_lahir' => 'Tempat Tgl Lahir',
            'no_ktp' => 'No Ktp',
            'kewarganearaan' => 'Kewarganearaan',
            'pekerjaan' => 'Pekerjaan',
            'agama' => 'Agama',
            'alamat' => 'Alamat',
            'status_keluarga' => 'Status Keluarga',
            'tempat_lahir' => 'Tempat Lahir',
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
            $this->kk == null ? "" : $this->kk->saveAs(Yii::getAlias('@webroot/upload/orang_tua/kk/'.$this->kk->baseName.'.'.$this->kk->extension));
            $this->ktp == null ? "" : $this->ktp->saveAs(Yii::getAlias('@webroot/upload/orang_tua/ktp/'.$this->ktp->baseName.'.'.$this->ktp->extension));
            return true;
        }else{
            return false;
        }
    }
}
