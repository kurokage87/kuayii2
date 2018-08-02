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

    <?php // echo $form->field($model, 'nasab_a') ?>

    <?php // echo $form->field($model, 'nasab_b') ?>

    <?php // echo $form->field($model, 'nasab_c') ?>

    <?php // echo $form->field($model, 'nama_pejabat_pemberi_izin') ?>

    <?php // echo $form->field($model, 'nomor_izin_pejabat') ?>

    <?php // echo $form->field($model, 'tgl_izin_surat') ?>

    <?php // echo $form->field($model, 'wna_instansi') ?>

    <?php // echo $form->field($model, 'wna_no_izin') ?>

    <?php // echo $form->field($model, 'wna_tgl_surat') ?>

    <?php // echo $form->field($model, 'izin_pengadilan_belum_umur') ?>

    <?php // echo $form->field($model, 'no_izin_pengadilan_belum_umur') ?>

    <?php // echo $form->field($model, 'tgl_izin_pengadilan_belum_umur') ?>

    <?php // echo $form->field($model, 'nama_pemeberi_izin') ?>

    <?php // echo $form->field($model, 'hubungan_keluarga') ?>

    <?php // echo $form->field($model, 'tgl_surat') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'status_perkawinan') ?>

    <?php // echo $form->field($model, 'nama_pasangan_sebelumnya') ?>

    <?php // echo $form->field($model, 'bukti_carai_instansi') ?>

    <?php // echo $form->field($model, 'bukti_cerai_no') ?>

    <?php // echo $form->field($model, 'tanggal_cerai') ?>

    <?php // echo $form->field($model, 'pernikahan_ke') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
