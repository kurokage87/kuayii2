<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\PelaksanaanNikah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelaksanaan-nikah-form">

    <?php $form = ActiveForm::begin(); ?>
      <?= $form->field($model, 'id_suami')->label('Nama Suami')->dropDownList(yii\helpers\ArrayHelper::map(app\models\DataCatin::find()
            ->where(['user_id' => Yii::$app->user->identity->id])
            ->andWhere(['status_data'=> app\models\DataCatin::suami])->all(), 'id', 'nama_lengkap'),[
                'readonly' => 'readonly' 
            ])?>
    
    <?= $form->field($model, 'id_istri')->label('Nama Istri')->dropDownList(yii\helpers\ArrayHelper::map(app\models\DataCatin::find()
            ->where(['user_id' => Yii::$app->user->identity->id])
            ->andWhere(['status_data'=> app\models\DataCatin::istri])->all(), 'id', 'nama_lengkap'),[
                'readonly' => 'readonly' 
            ])?>

    <?= $form->field($model, 'hari_nikah')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'waktu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_nikah')->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-mm-yyyy',
                ]
            ]) ?>

    <?= $form->field($model, 'tempat')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    'language' => 'id',
    'clientOptions' => [
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ]
    ])  ?>
    
   

    <?= $form->field($model, 'kec_id')->label('Desa')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\Kecamatan::find()->all(), 'id', 'nama_kec'),[
        'prompt' => 'Pilih '
    ]) ?>

    <?= $form->field($model, 'mas_kawin')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'pembayaran')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'no_perjanjian_kawin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_surat_perjanjian')->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-mm-yyyy',
                ]
            ]) ?>

    <?= $form->field($model, 'nama_notaris')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
