<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrangTuaCatin */

$this->title = $model->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Orang Tua Catins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orang-tua-catin-view">

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
            'dataCatin.nama_lengkap',
            [
                'label' => 'Nama Lengkap Orang Tua',
                'attribute' => 'nama_lengkap'
            ],
            'tempat_tgl_lahir',
            'no_ktp',
            'kewarganearaan',
            'pekerjaan',
            'agama',
            'alamat:html',
            [
                'label' => 'Status Keluarga',
                'value' => function ($model){
                    if ($model->status_keluarga == \app\models\OrangTuaCatin::ayah){
                        return 'Ayah';
                    }else{
                        return 'Ibu';
                    }
                }
            ],
        ],
    ]) ?>

</div>
