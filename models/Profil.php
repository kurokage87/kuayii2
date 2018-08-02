<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil".
 *
 * @property int $id
 * @property int $user_id
 * @property string $nama
 * @property string $tempat_tgl_lahir
 * @property string $no_ktp
 * @property string $alamat
 * @property string $agama
 * @property string $no_telp
 * @property string $foto
 * @property string $tempat_lahir
 * @property string $jabatan
 * @property int $kec_id
 * @property string $file_ktp 
 *
 * @property Kecamatan $kec
 * @property User $user
 */
class Profil extends \yii\db\ActiveRecord
{
    public $image;
    public $ktp;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'kec_id'], 'integer'],
            [['alamat'], 'string'],
            [['nama', 'tempat_tgl_lahir', 'no_ktp', 'agama', 'no_telp', 'foto', 'tempat_lahir', 'jabatan', 'file_ktp'], 'string', 'max' => 255],
            [['kec_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['kec_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['image'],'image', 'skipOnEmpty' => true],
            [['ktp'],'image', 'skipOnEmpty' => true],
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
            'nama' => 'Nama',
            'tempat_tgl_lahir' => 'Tempat Tgl Lahir',
            'no_ktp' => 'No Ktp',
            'alamat' => 'Alamat',
            'agama' => 'Agama',
            'no_telp' => 'No Telp',
            'foto' => 'Foto',
            'tempat_lahir' => 'Tempat Lahir',
            'jabatan' => 'Jabatan',
            'kec_id' => 'Kec ID',
            'file_ktp' => 'Scan KTP'
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
    
    public function upload()
    {
        if ($this->validate()){
            $this->image == null ? "" : $this->image->saveAs(Yii::getAlias('@webroot/upload/profil/'.$this->image->baseName.'.'.$this->image->extension));
            $this->ktp == null ? "" : $this->ktp->saveAs(Yii::getAlias('@webroot/upload/profil/ktp/'.$this->ktp->baseName.'.'.$this->ktp->extension));
            return true;
        }else{
            return false;
        }
    }
}
