<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchModel\DataCatinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-catin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'tempat_tgl_lahir') ?>

    <?= $form->field($model, 'no_ktp') ?>

    <?php // echo $form->field($model, 'kewarganearaan') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'status_data') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
