<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\DetailCatin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-catin-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <p>
        <?= $form->field($model, 'data_catin_id')->label('Nama Suami')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\DataCatin::find()->where(['user_id' => Yii::$app->user->identity->id])->andWhere(['status_data'=>  \app\models\DataCatin::suami])->all(), 'id', 'nama_lengkap'),[
            'readonly' => 'readonly'
        ]) ?>
    </p>
    
    <p>
        Istri Ke 1
    </p>

    <?= $form->field($model, 'nama_istri_pertama', ['options' => ['class' => 'col-md-3']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'k_akta_nikah_pertama',['options' => ['class' => 'col-md-3']])->label('Kutipan Akta Nikah Pertama')->textInput() ?>

    <?= $form->field($model, 'akta1',['options' => ['class' => 'col-md-3']])->label('Scan Akta Nikah')->fileInput() ?>

    <?= $form->field($model, 'tgl_akta_pertama',['options' => ['class' => 'col-md-3']])->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>
    
    <p>
        Istri Ke 2
    </p>

    <?= $form->field($model, 'nama_istri_kedua', ['options' => ['class' => 'col-md-3']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'k_akta_nikah_kedua',['options' => ['class' => 'col-md-3']])->label('Kutipan Akta Nikah Kedua')->textInput() ?>

    <?= $form->field($model, 'akta2', ['options' => ['class' => 'col-md-3']])->label('Scan Akta Nikah')->fileInput()?>

    <?= $form->field($model, 'tgl_akta_kedua',['options' => ['class' => 'col-md-3']])->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>
    
    <p>
        Istri Ke 3
    </p>

    <?= $form->field($model, 'nama_istri_ketiga', ['options' => ['class' => 'col-md-3']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'k_akta_nikah_ketiga', ['options' => ['class' => 'col-md-3']])->label('Kutipan Akta Nikah Kaetiga')->textInput() ?>

    <?= $form->field($model, 'akta3', ['options' => ['class' => 'col-md-3']])->label('Scan Akta Nikah')->fileInput() ?>

    <?= $form->field($model, 'tgl_akta_ketiga', ['options' => ['class' => 'col-md-3']])->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>
    
    <p>
        Izin Pengadilan
    </p>

    <?= $form->field($model, 'izin_pengadilan', ['options' => ['class' => 'col-md-4']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scan_izin_p', ['options' => ['class' => 'col-md-4']])->label('Izin Pengadilan')->fileInput() ?>

    <?= $form->field($model, 'tgl_izin', ['options' => ['class' => 'col-md-4']])->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>
    
    <p>
        Persetujuan Istri-Istri
    </p>

    <?= $form->field($model, 'scan_izin_istri',['options' => ['class' => 'col-md-6']])->label('Scan Persetujuan Istri')->fileInput() ?>

    <?= $form->field($model, 'tgl_persetujuan_istri', ['options' => ['class' => 'col-md-6']])->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
