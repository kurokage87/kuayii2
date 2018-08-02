<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchModel\PelaksanaanNikahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pelaksanaan Nikah';
$this->params['breadcrumbs'][] = $this->title;
$ctrl = Yii::$app->controller->action->id;
?>
<div class="pelaksanaan-nikah-index">

    <h1><?php

        if ($ctrl == 'halaman-pegawai-desa'){
            echo 'Halaman Pegawai Desa';
        }  else {
            echo Html::encode($this->title);
        }
     ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
         if (Yii::$app->user->identity-> level == app\models\User::catin && $ctrl != 'daftar-lengkapi'){
             echo Html::a('Create Pelaksanaan Nikah', ['create'], ['class' => 'btn btn-success']);
         }
        ?>
    </p>

    <?php if ($ctrl == 'daftar-lengkapi') {
        echo GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
            'panel' => ['type' => 'primary', 'heading' => ''],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            
            'note_kelengkapan:html',
            
            [
                'label' => 'Status Pengajuan',
                'attribute' => 'status_nikah',
                'value' => function ($d){
                    if ($d->status_nikah == app\models\PelaksanaanNikah::daftar_nikah){
                        return 'Pendaftaran';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::diperiksa_pegawai_desa) {
                        return 'Diperiksa Pegawai Desa';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::disetujui_kepala_desa) {
                        return 'Disetujui Kepala Desa';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::diperiksa_pegawai_kua) {
                        return 'DiPeriksa Pegawai KUA';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::disetujui_kepala_kua) {
                        return 'DiSetujui Kepala KUA';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::lengkap_pegdes) {
                        return 'Persyaratan Awal Lengkap';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::lengkap_pegkua) {
                        return 'Persyaratan Akhir Lengkap';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::lengkapi_kembali) {
                        return 'Lengkapi Kembali';
                    }elseif ($d->status_nikah == \app\models\PelaksanaanNikah::daftar_catin) {
                        return 'Daftar Catin';
                    }
                }
            ],
            [
                'label' => 'Action',
                'format' => 'raw',
                'value' => function($model){
                return Html::a('<i class="fa fa-eye"></i>',['view','id' => $model->id]);
                }
                
            ],
            
        ],
    ]);
    }else{
        echo kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
             'panel' => ['type' => 'primary', 'heading' => ''],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            [
                'label' => 'Username',
                'attribute' => 'user_id',
                'value' => function ($d){
                return $d->user->username;
                }
                ],
//            'penguhulu_id',
//            'hari_nikah',
//            'tgl_nikah',
//            'waktu',
//            'tempat:html',
            [
              'label' => 'Nama Suami',
                'attribute' => 'id_suami',
                'value' => function($d){
                    return $d->suami->nama_lengkap;
                }
            ],
            [
                'label' => 'Nama Istri',
                'attribute' => 'id_istri',
                'value' => function($d){
                return $d->istri->nama_lengkap;
                }
            ],
            //'tgl_daftar',
            [
                'label' => 'Nama Desa',
                'attribute' => 'kec_id',
                'value' => 'kec.nama_kec'
            ],
            //'kota',
            //'mas_kawin',
            //'pembayaran',
            //'no_perjanjian_kawin',
            //'tgl_surat_perjanjian',
            //'nama_notaris',
            [
                'label' => 'Status Pengajuan',
                'attribute' => 'status_nikah',
                'value' => function ($d){
                    if ($d->status_nikah == app\models\PelaksanaanNikah::daftar_nikah){
                        return 'Pendaftaran';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::diperiksa_pegawai_desa) {
                        return 'Diperiksa Pegawai Desa';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::disetujui_kepala_desa) {
                        return 'Disetujui Kepala Desa';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::diperiksa_pegawai_kua) {
                        return 'DiPeriksa Pegawai KUA';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::disetujui_kepala_kua) {
                        return 'DiSetujui Kepala KUA';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::lengkap_pegdes) {
                        return 'Persyaratan Awal Lengkap';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::lengkap_pegkua) {
                        return 'Persyaratan Akhir Lengkap';
                    }elseif ($d->status_nikah == app\models\PelaksanaanNikah::lengkapi_kembali) {
                        return 'Lengkapi Kembali';
                    }elseif ($d->status_nikah == \app\models\PelaksanaanNikah::daftar_catin) {
                        return 'Daftar Catin';
                    }
                }
            ],
            [
                'label' => 'Action',
                'format' => 'raw',
                'value' => function($model){
                return Html::a('<i class="fa fa-eye"></i>',['view','id' => $model->id]);
                }
                
            ],
            
        ],
    ]);
    } ?>
</div>
