<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchModel\DetailCatinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-catin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'data_catin_id') ?>

    <?= $form->field($model, 'nama_istri_pertama') ?>

    <?= $form->field($model, 'k_akta_nikah_pertama') ?>

    <?= $form->field($model, 'no_akta_pertama') ?>

    <?php // echo $form->field($model, 'tgl_akta_pertama') ?>

    <?php // echo $form->field($model, 'nama_istri_kedua') ?>

    <?php // echo $form->field($model, 'k_akta_nikah_kedua') ?>

    <?php // echo $form->field($model, 'no_akta_kedua') ?>

    <?php // echo $form->field($model, 'tgl_akta_kedua') ?>

    <?php // echo $form->field($model, 'nama_istri_ketiga') ?>

    <?php // echo $form->field($model, 'k_akta_nikah_ketiga') ?>

    <?php // echo $form->field($model, 'no_akta_ketiga') ?>

    <?php // echo $form->field($model, 'tgl_akta_ketiga') ?>

    <?php // echo $form->field($model, 'izin_pengadilan') ?>

    <?php // echo $form->field($model, 'no_izin') ?>

    <?php // echo $form->field($model, 'tgl_izin') ?>

    <?php // echo $form->field($model, 'persetujuan_istri') ?>

    <?php // echo $form->field($model, 'tgl_persetujuan_istri') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
