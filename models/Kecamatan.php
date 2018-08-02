<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kecamatan".
 *
 * @property int $id
 * @property string $nama_kec
 * @property string $kepala_desa
 *
 * @property PelaksanaanNikah[] $pelaksanaanNikahs
 * @property Profil[] $profils
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kec', 'kepala_desa'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kec' => 'Nama Desa',
            'kepala_desa' => 'Kepala Desa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelaksanaanNikahs()
    {
        return $this->hasMany(PelaksanaanNikah::className(), ['kec_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfils()
    {
        return $this->hasMany(Profil::className(), ['kec_id' => 'id']);
    }
}
