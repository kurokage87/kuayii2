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
            //'nasab_a',
            //'nasab_b',
            //'nasab_c',
            //'nama_pejabat_pemberi_izin',
            //'nomor_izin_pejabat',
            //'tgl_izin_surat',
            //'wna_instansi',
            //'wna_no_izin',
            //'wna_tgl_surat',
            //'izin_pengadilan_belum_umur',
            //'no_izin_pengadilan_belum_umur',
            //'tgl_izin_pengadilan_belum_umur',
            //'nama_pemeberi_izin',
            //'hubungan_keluarga',
            //'tgl_surat',
            //'tempat_lahir',
            //'status_perkawinan',
            //'nama_pasangan_sebelumnya',
            //'bukti_carai_instansi',
            //'bukti_cerai_no',
            //'tanggal_cerai',
            //'pernikahan_ke',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
