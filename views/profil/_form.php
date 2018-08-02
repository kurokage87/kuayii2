<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\Profil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
    
    <?php
    if (Yii::$app->user->identity->level == \app\models\User::Admin){
        echo "";
    }else{
    echo $form->field($model, 'no_ktp')->textInput(['maxlength' => true]);
    }?>
    
    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_tgl_lahir')->label('Tanggal Lahir')->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
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
    
    <?php
 if (Yii::$app->user->identity->level == \app\models\User::Admin){
     echo '';
 }else{
    echo $form->field($model, 'kec_id')->label('Kecamatan')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\Kecamatan::find()->all(), 'id', 'nama_kec'),[
        'prompt' => 'Pilih Kecamatan'
    ]);
 }?>

    <?= $form->field($model, 'agama')->dropDownList([
        'prompt' => 'Pilih',
        'Islam' => 'Islam',
        'Katolik' => 'Katolik',
        'Protestan' => 'Protestan',
        'Budha' => 'Budha',
        'Hindu' => 'Hindu',
        'Tionghoa' => 'Tionghoa'
     ])  ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>
    
    <?php if (Yii::$app->user->identity->level == app\models\User::catin){
        echo "";
    }else{
        echo $form->field($model, 'jabatan')->dropDownList([
            'prompt' => 'Pilih Jabatan',
            app\models\User::Admin => 'Admin',
            app\models\User::kepdes => 'Kepala Desa',
            app\models\User::pegkua => 'Pegawai KUA',
            app\models\User::kepkua => 'Kepala KUA',
            app\models\User::penghulu => 'Penghulu',
            app\models\User::pegdes => 'Pegawai Desa',
            app\models\User::catin => 'Calon Pengantin',
        ]);
    }
?>

    <?= $form->field($model, 'image')->label('Upload Foto')->fileInput() ?>
    
    <?=$form->field($model, 'ktp')->label('Upload Scan KTP')->fileInput()?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
