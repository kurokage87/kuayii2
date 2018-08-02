<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_materi".
 *
 * @property int $id
 * @property int $materi_id
 * @property string $nama_materi
 * @property string $ket
 * @property string $file_swf
 * @property string $file_pdf
 *
 * @property Materi $materi
 */
class SubMateri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $swfFile;
    public $pdfFile;


    public static function tableName()
    {
        return 'sub_materi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['materi_id'], 'integer'],
            [['nama_materi', 'ket',], 'required'],
            [['ket'], 'string'],
            [['nama_materi', 'file_swf', 'file_pdf'], 'string', 'max' => 255],
            [['materi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Materi::className(), 'targetAttribute' => ['materi_id' => 'id']],
            [['swfFile'],'file', 'skipOnEmpty' => true, 'maxSize'=> 1193000000, 'checkExtensionByMimeType'=> FALSE, 'skipOnError' => true ],
            [['pdfFile'],'file', 'skipOnEmpty' => true,  'maxSize'=> 1193000000, 'checkExtensionByMimeType'=> FALSE, 'skipOnError' => true]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'materi_id' => 'Materi ID',
            'nama_materi' => 'Nama Materi',
            'ket' => 'Ket',
            'file_swf' => 'File Swf',
            'file_pdf' => 'File Pdf',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
      
        public function getMateri()
    {
        return $this->hasOne(Materi::className(), ['id' => 'materi_id']);
    }
    
    public function uploadPDF()
    {   
        if($this->validate())
        {
            if (!$this->swfFile){
                $this->pdfFile->saveAs(Yii::getAlias('@webroot/upload/submateri/pdf/'. $this->pdfFile->baseName. '.' .$this->pdfFile->extension));
            }elseif (!$this->pdfFile) {
                $this->swfFile->saveAs(Yii::getAlias('@webroot/upload/submateri/swf/'. $this->swfFile->baseName. '.' .$this->swfFile->extension));
            }else{
                $this->swfFile->saveAs(Yii::getAlias('@webroot/upload/submateri/swf/'. $this->swfFile->baseName. '.' .$this->swfFile->extension));
                $this->pdfFile->saveAs(Yii::getAlias('@webroot/upload/submateri/pdf/'. $this->pdfFile->baseName. '.' .$this->pdfFile->extension));
            }
            return true;
        }else{
            return false;
        }
    }
}
