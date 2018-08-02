<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchModel\OrangTuaCatinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orang Tua Catins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orang-tua-catin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Orang Tua Catin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'data_catin_id',
            'nama_lengkap',
            'tempat_tgl_lahir',
            'no_ktp',
            //'kewarganearaan',
            //'pekerjaan',
            //'agama',
            //'alamat:ntext',
            //'status_keluarga',
            //'tempat_lahir',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
