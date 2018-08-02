<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\DataCatin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-catin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_tgl_lahir')->label('Tanggal Lahir')->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>

    <?= $form->field($model, 'kewarganearaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->dropDownList([
        'prompt' => 'Pilih',
        'Islam' => 'Islam',
        'Katolik' => 'Katolik',
        'Protestan' => 'Protestan',
        'Budha' => 'Budha',
        'Hindu' => 'Hindu',
        'Tionghoa' => 'Tionghoa'
     ]) ?>

    <?= $form->field($model, 'alamat')->widget(TinyMce::className(), [
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
    ]) ?>

    <?= $form->field($model, 'status_data')->label('Status Sebagai')->dropDownList([
        'prompt' => 'Pilih Status',
        app\models\DataCatin::suami => 'Suami',
        app\models\DataCatin::istri => 'Istri'
    ]) ?>
    
    <?= $form->field($model, 'status_perkawinan')->dropDownList([
        'prompt' => 'Pilih Status Perkawinan',
        app\models\DataCatin::perjaka => 'Perjaka',
        app\models\DataCatin::perawan => 'Perawan',
        app\models\DataCatin::duda => 'Duda',
        app\models\DataCatin::janda => 'Janda',
       app\models\DataCatin::beristri => 'Beristri'
    ]) ?>
    
    <?= $form->field($model, 'pernikahan_ke')->textInput() ?>
    
    <?= $form->field($model, 'image')->label('Upload Foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
