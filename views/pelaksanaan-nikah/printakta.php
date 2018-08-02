<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PelaksanaanNikah */

$this->title = $model->user->username;
$this->params['breadcrumbs'][] = ['label' => 'Pelaksanaan Nikahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container col-md-12">
    <div class="text-center">
        <img src="<?= Yii::getAlias('@web/upload/cetak/logo/garuda.png')?>" width="20%" alt=""/>
        <h1>AKTA NIKAH</h1>
    </div>
    <br>
    <table class="table table-responsive" cellpadding ="20" style="font-size: 24px; font-family: monospace;">
        <tr>
            <td>Nomor Akta</td>
            <td>:</td>
            <td><?=$model->no_perjanjian_kawin ?></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td><?=$model->kec->nama_kec ?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><?=$model->kota ?></td>
        </tr>
    </table>
    <br>
    <table class="table table-responsive text-center">
        <tr>
            <td><img src="<?=  Yii::getAlias('@web/upload/data-catin/'.$model->suami->foto)?>" width="20%" /></td>
            <td><img src="<?=  Yii::getAlias('@web/upload/data-catin/'.$model->istri->foto)?>" width="20%" /></td>
        </tr>
        <tr>
            <td>Suami</td>
            <td>Istri</td>
        </tr>
        <tr>
            <td><?=$model->suami->nama_lengkap?></td>
            <td><?=$model->istri->nama_lengkap?></td>
        </tr>
    </table>
</div>

    