<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "upload_bukti".
 *
 * @property int $id
 * @property int $pelaksanaan_nikah_id
 * @property string $nama_rek
 * @property string $nama_bank
 * @property string $tanggal_kirim
 * @property string $foto
 *
 * @property PelaksanaanNikah $pelaksanaanNikah
 */
class UploadBukti extends \yii\db\ActiveRecord
{
    public $imageFile;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'upload_bukti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pelaksanaan_nikah_id'], 'integer'],
            [['tanggal_kirim'], 'safe'],
            [['nama_rek', 'nama_bank', 'foto'], 'string', 'max' => 255],
            [['pelaksanaan_nikah_id'], 'exist', 'skipOnError' => true, 'targetClass' => PelaksanaanNikah::className(), 'targetAttribute' => ['pelaksanaan_nikah_id' => 'id']],
            [['imageFile'], 'image'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pelaksanaan_nikah_id' => 'Pelaksanaan Nikah ID',
            'nama_rek' => 'Nama Rek',
            'nama_bank' => 'Nama Bank',
            'tanggal_kirim' => 'Tanggal Kirim',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelaksanaanNikah()
    {
        return $this->hasOne(PelaksanaanNikah::className(), ['id' => 'pelaksanaan_nikah_id']);
    }
    
    public function upload()
    {
        if ($this->validate()){
            $this->imageFile->saveAs(\Yii::getAlias('@webroot/upload/bukti-bayar/'.$this->imageFile->baseName.'.'.$this->imageFile->extension));
            return true;
        }else{
            return false;
        }
    }
}
