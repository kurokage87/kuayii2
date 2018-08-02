<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchModel\DetailCatinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Catins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-catin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Catin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'data_catin_id',
            'nama_istri_pertama',
            'k_akta_nikah_pertama',
            'no_akta_pertama',
            //'tgl_akta_pertama',
            //'nama_istri_kedua',
            //'k_akta_nikah_kedua',
            //'no_akta_kedua',
            //'tgl_akta_kedua',
            //'nama_istri_ketiga',
            //'k_akta_nikah_ketiga',
            //'no_akta_ketiga',
            //'tgl_akta_ketiga',
            //'izin_pengadilan',
            //'no_izin',
            //'tgl_izin',
            //'persetujuan_istri',
            //'tgl_persetujuan_istri',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
