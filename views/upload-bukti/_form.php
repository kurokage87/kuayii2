<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UploadBukti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="upload-bukti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelaksanaan_nikah_id')->textInput() ?>

    <?= $form->field($model, 'nama_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_kirim')->textInput() ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
