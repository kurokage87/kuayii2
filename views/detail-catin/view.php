<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetailCatin */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Detail Catins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-catin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'data_catin_id',
            'nama_istri_pertama',
            'k_akta_nikah_pertama',
            'no_akta_pertama',
            'tgl_akta_pertama',
            'nama_istri_kedua',
            'k_akta_nikah_kedua',
            'no_akta_kedua',
            'tgl_akta_kedua',
            'nama_istri_ketiga',
            'k_akta_nikah_ketiga',
            'no_akta_ketiga',
            'tgl_akta_ketiga',
            'izin_pengadilan',
            'no_izin',
            'tgl_izin',
            'persetujuan_istri',
            'tgl_persetujuan_istri',
        ],
    ]) ?>

</div>
