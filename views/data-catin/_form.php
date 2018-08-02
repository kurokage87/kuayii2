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
    <p>
        <b>A.Biodata Diri</b>
    </p>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama_lengkap', ['options' => ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp', ['options' => ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'tempat_lahir', ['options' => ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'tempat_tgl_lahir', ['options' => ['class' => 'col-md-6']])->label('Tanggal Lahir')->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>

    <?= $form->field($model, 'kewarganearaan', ['options' => ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan', ['options' => ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama', ['options' => ['class' => 'col-md-6']])->dropDownList([
        'prompt' => 'Pilih',
        'Islam' => 'Islam',
        'Katolik' => 'Katolik',
        'Protestan' => 'Protestan',
        'Budha' => 'Budha',
        'Hindu' => 'Hindu',
        'Tionghoa' => 'Tionghoa'
     ]) ?>
    
    <?= $form->field($model, 'status_data',['options' => ['class' => 'col-md-6']])->label('Status Sebagai')->dropDownList([
        'prompt' => 'Pilih Status',
        app\models\DataCatin::suami => 'Suami',
        app\models\DataCatin::istri => 'Istri'
    ]) ?>
    
    <?= $form->field($model, 'status_perkawinan', ['options' => ['class' => 'col-md-6']])->dropDownList([
        'prompt' => 'Pilih Status Perkawinan',
        app\models\DataCatin::perjaka => 'Perjaka',
        app\models\DataCatin::perawan => 'Perawan',
        app\models\DataCatin::duda => 'Duda',
        app\models\DataCatin::janda => 'Janda',
       app\models\DataCatin::beristri => 'Beristri'
    ]) ?>
    
    <?= $form->field($model, 'pernikahan_ke', ['options' => ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'alamat', ['options' => ['class' => 'col-md-12']])->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'image', ['options' => ['class' => 'col-md-12']])->fileInput() ?>
    
    <?= $form->field($model, 'ktp', ['options' => ['class' => 'col-md-12']])->label('Scan KTP')->fileInput() ?>
    
    <?= $form->field($model, 'kk', ['options' => ['class' => 'col-md-12']])->label('Scan KK')->fileInput() ?>
    
    <p>
        <b>B. Hubungan Nasab, <i>radla'ah</i> atau <i>mushaharah</i> (semenda)</b>
    </p>

    <?= $form->field($model, 'nasab_a', ['options' => ['class' => 'col-md-4']])->label('Dia Sendiri/Calon Suami')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nasab_b', ['options' => ['class' => 'col-md-4']])->label('Bekas Istri/Bekas Istri Calon Suami')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nasab_c', ['options' => ['class' => 'col-md-4']])->label('Istri-Istri/Istri-Istri Calon Suami')->textInput(['maxlength' => true]) ?>
    
    <p>
        <b>C. Jika Anggota TNI/Polri</b>
    </p>

    <?= $form->field($model, 'nama_pejabat_pemberi_izin',['options' => ['class' => 'col-md-4']])->label('Pejabat Pemberi Izin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'izin_pejabat',['options' => ['class' => 'col-md-4']])->label('Scan Surat')->fileInput() ?>

    <?= $form->field($model, 'tgl_izin_surat', ['options' => ['class' => 'col-md-4']])->label('Tanggal Surat')->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>
    
    <p>
        <b>D. Jika WNA (Warga Negara Asing)</b>
    </p>

    <?= $form->field($model, 'wna_instansi', ['options' => ['class' => 'col-md-4']])->label('Instansi Pemberi Izin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wna_no_izin', ['options' => ['class' => 'col-md-4']])->label('Surat Izin WNA')->fileInput() ?>

    <?= $form->field($model, 'wna_tgl_surat', ['options' => ['class' => 'col-md-4']])->label('Tanggal Surat')->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>
    
    <p>
        <b>E. Jika belum mencapai umur 19 tahun</b>
    </p>

    <?= $form->field($model, 'izin_pengadilan_belum_umur', ['options' => ['class' => 'col-md-4']])->label('Izin Pengadilan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'izin_belum_umur', ['options' => ['class' => 'col-md-4']])->label('Surat Izin Belum Umur')->fileInput() ?>

    <?= $form->field($model, 'tgl_izin_pengadilan_belum_umur', ['options' => ['class' => 'col-md-4']])->label('Tanggal Surat')->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>
    
    <p>
        <b>F. Jika belum mencapai umur 21 tahun</b>
    </p>

    <?= $form->field($model, 'nama_pemeberi_izin', ['options' => ['class' => 'col-md-4']])->label('Nama yang memberi izin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hubungan_keluarga', ['options' => ['class' => 'col-md-4']])->label('Hubungan Keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_surat', ['options' => ['class' => 'col-md-4']])->label('Tanggal Surat')->widget(
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
