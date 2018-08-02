<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\DataCatin */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="data-catin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasangan_sebelumnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bukti_carai_instansi')->label('Bukti Cerai Dari Instansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bukti_cerai_no')->label('Nomor Bukti Cerai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_cerai')->label('Tanggal Cerai')->widget(
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
