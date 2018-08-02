<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\OrangTuaCatin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orang-tua-catin-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    
    <?= $form->field($model, 'data_catin_id')->label('Orang Tua Dari')->dropDownList(\yii\helpers\ArrayHelper::map(app\models\DataCatin::find()->where(['user_id' => Yii::$app->user->identity->id])->all(), 'id', 'nama_lengkap'),[
       'prompt' => 'Pilih' 
    ]) ?>

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
    ])?>

    <?= $form->field($model, 'status_keluarga')->dropDownList([
        'prompt' => 'Pilih Status',
        app\models\OrangTuaCatin::ayah => 'Ayah',
        app\models\OrangTuaCatin::ibu => 'Ibu'
    ]) ?>
    
    <?= $form->field($model, 'ktp')->label('Scan KTP')->fileInput() ?>
    
    <?= $form->field($model, 'kk')->label('Scan KK')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
