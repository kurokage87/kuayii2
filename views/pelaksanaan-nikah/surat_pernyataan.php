<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ctrl = Yii::$app->controller->action->id;
?>
<div class="container">
    <div class="text-center">
        <h3><i>SURAT PERNYATAAN</i></h3>
    </div>
    <br />
    <p>
        Saya yang bertanda tangan di bawah ini :
    <table class="table table-hover">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $ctrl == 'cetak-pernyataan-suami' ? $model->suami->nama_lengkap : $model->istri->nama_lengkap ?></td>
        </tr>
        <?php 
        if ($ctrl == 'cetak-pernyataan-suami'){
            $orangTua = app\models\OrangTuaCatin::find()->where(['data_catin_id' => $model->suami->id])->andWhere(['status_keluarga' => app\models\OrangTuaCatin::ayah])->all();
        }else{
            $orangTua = app\models\OrangTuaCatin::find()->where(['data_catin_id' => $model->istri->id])->andWhere(['status_keluarga' => app\models\OrangTuaCatin::ayah])->all();
        }
        ?>
        <?php foreach ($orangTua as $o) { ?>
        <tr>
            <td><?=$ctrl == 'cetak-pernyatan-suami' ? 'Bin' : 'Binti'?></td>
            <td>:</td>
            <td><?= $o->nama_lengkap ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td>Tempat / Tanggal Lahir</td>
            <td>:</td>
            <td><?= $ctrl == 'cetak-pernyataan-suami' ? $model->suami->tempat_lahir.', '.$model->suami->tempat_tgl_lahir : $model->istri->tempat_lahir.', '.$model->istri->tempat_tgl_lahir ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $ctrl == 'cetak-pernyataan-suami' ? $model->suami->alamat : $model->istri->alamat?></td>
        </tr>
    </table>
    </p>
    <p>
        Dengan ini menyatakan dengan sesungguhnya bahwa saya benar-benar 
        <?php
        if ($ctrl == 'cetak-pernyataan-suami' && $model->suami->status_perkawinan == \app\models\DataCatin::perjaka){
            echo '<b>Belum pernah Menikah</b>';
        }elseif ($ctrl == 'cetak-pernyataan-suami' && $model->suami->status_perkawinan == \app\models\DataCatin::duda) {
            echo '<b>Sudah Pernah Menikah</b>';
        }elseif ($ctrl == 'cetak-pernyataan-suami' && $model->suami->status_perkawinan == \app\models\DataCatin::beristri) {
            echo '<b>Sudah Pernah Menikah</b>';
        }elseif($ctrl != 'cetak-pernyataan-suami' && $model->istri->status_perkawinan == \app\models\DataCatin::perawan){
            echo '<b>Belum Pernah Menikah</b>';
        }elseif ($ctrl != 'cetak-pernyataan-suami' && $model->istri->status_perkawinan == \app\models\DataCatin::janda) {
            echo '<b>Sudah Pernah Menikah</b>';
        }
        ?> dan berstatus
        <?php
        if ($ctrl == 'cetak-pernyataan-suami' && $model->suami->status_perkawinan == \app\models\DataCatin::perjaka){
            echo '<b>Perjaka</b>';
        }elseif ($ctrl == 'cetak-pernyataan-suami' && $model->suami->status_perkawinan == \app\models\DataCatin::duda) {
            echo '<b>Duda</b>';
        }elseif ($ctrl == 'cetak-pernyataan-suami' && $model->suami->status_perkawinan == \app\models\DataCatin::beristri) {
            echo '<b>Beristri</b>';
        }elseif($ctrl == 'cetak-pernyataan-istri' && $model->istri->status_perkawinan == \app\models\DataCatin::perawan){
            echo '<b>Perawan</b>';
        }elseif ($ctrl != 'cetak-pernyataan-istri' && $model->istri->status_perkawinan == \app\models\DataCatin::janda) {
            echo '<b>Janda</b>';
        }
        ?>. Seandainya dikemudian hari ternyata bahwa pernyataan saya ini tidak benar dan palsu maka saya bersedia dituntut dimuka pengadilan sesuai dengan hukum yang berlaku menurut yang telah ditentukan oleh Undang-undang Perkawinan tanpa melibatkan Pejabat Desa setempat.
    </p>
    <p>
        Demikianlah Surat Pernyataan ini saya buat dengan sebenar-benarnya dan ditanda tangani di hadapan Ninik Mamak dan Pejabat Pemerintah setempat.
    </p>
    <p>
    <table class="table table-hover">
        <tr>
            <td></td>
            <td>
                <?=$model->kec->nama_kec.', '. date('d F Y')?> <br />
                Saya yang menyatakan : <br />
                <?= yii\helpers\Html::img(Yii::getAlias('@web/upload/logo_materai.jpg'))?><br />
                <b>( <?=$ctrl == 'cetak-pernyataan-suami' ? $model->suami->nama_lengkap : $model->istri->nama_lengkap ?> )</b>
            </td>
        </tr>
    </table>
    </p>
</div>
