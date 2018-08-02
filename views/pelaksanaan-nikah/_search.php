<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchModel\PelaksanaanNikahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelaksanaan-nikah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'penguhulu_id') ?>

    <?= $form->field($model, 'hari_nikah') ?>

    <?= $form->field($model, 'tgl_nikah') ?>

    <?php // echo $form->field($model, 'waktu') ?>

    <?php // echo $form->field($model, 'tempat') ?>

    <?php // echo $form->field($model, 'tgl_daftar') ?>

    <?php // echo $form->field($model, 'kec_id') ?>

    <?php // echo $form->field($model, 'kota') ?>

    <?php // echo $form->field($model, 'mas_kawin') ?>

    <?php // echo $form->field($model, 'pembayaran') ?>

    <?php // echo $form->field($model, 'no_perjanjian_kawin') ?>

    <?php // echo $form->field($model, 'tgl_surat_perjanjian') ?>

    <?php // echo $form->field($model, 'nama_notaris') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
