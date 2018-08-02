<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchModel\DataCatinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Catins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-catin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Data Catin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'nama_lengkap',
            'tempat_tgl_lahir',
            'no_ktp',
            //'kewarganearaan',
            //'pekerjaan',
            //'agama',
            //'alamat:ntext',
            //'status_data',
            //'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
