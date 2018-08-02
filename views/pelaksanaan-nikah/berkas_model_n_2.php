<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ctrl = Yii::$app->controller->action->id;
if ($ctrl == 'cetak-berkas-model-n-1-suami'){
    $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' =>$model->suami->id])->all();
}else{
    $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' =>$model->istri->id])->all();
}
?>
<br>
<br />
<br />
<div class="container">
    <table>
        <tr>
            <td>Kantor Desa</td>
            <td>:</td>
            <td><?=$model->kec->nama_kec?></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td>Pariaman Selatan</td>
        </tr>
        <tr>
            <td>Kabupaten/Kota</td>
            <td>:</td>
            <td>Kota Pariaman</td>
        </tr>
    </table>
    <br />
    <div class="text-center">
        <b><u>SURAT KETERANGAN ASAL USUL</u></b>
        <p>Nomor : <?=$model->id?> /SKN/KPKD/IV-<?= date('Y')?></p>
    </div>
    <br />
    <div class="text-left">
        Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :
        <table class="table table-responsive">
            <tr>
                <td>1.</td>
                <td>Nama</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-2-suami' ? $model->suami->nama_lengkap : $model->istri->nama_lengkap?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-2-suami' ? $model->suami->tempat_lahir.', '.$model->suami->tempat_tgl_lahir : $model->istri->tempat_lahir.', '.$model->istri->tempat_tgl_lahir?></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-2-suami' ? $model->suami->kewarganearaan : $model->istri->kewarganearaan?></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Agama</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-2-suami' ? $model->suami->agama : $model->istri->agama?></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-2-suami' ? $model->suami->pekerjaan : $model->istri->pekerjaan?></td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Alamat</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-2-suami' ? $model->suami->alamat : $model->istri->alamat?></td>
            </tr>
        </table>
        <br />
        <?php foreach ($orangTua as $o) { 
            if ($o->status_keluarga == \app\models\OrangTuaCatin::ayah){
                echo 'Adalah benar anak kandung dari pernikahan seorang Pria :';
            } else {
                echo 'Dengan seorang Wanita : ';
            }
        ?>
        
        <table class="table table-responsive">
            <tr>
                <td>1.</td>
                <td>Nama</td>
                <td>:</td>
                <td><?=$o->nama_lengkap?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td><?=$o->tempat_lahir.', '.$o->tempat_tgl_lahir?></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td><?=$o->kewarganearaan?></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Agama</td>
                <td>:</td>
                <td><?=$o->agama?></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?=$o->pekerjaan?></td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Alamat</td>
                <td>:</td>
                <td><?=$o->alamat?></td>
            </tr>
        </table>
        <?php } ?>
        <p>
            Demikian Surat ini dibuat dengan mengingat sumpah dan untuk digunakan seperlunya.
        </p>
        <br />
        <p><?=$model->kec->nama_kec.', '.date('d F Y')?></p>
        <p>Kepala Desa <?=$model->kec->nama_kec?></p>
        <br />
        <br />
        <br />
        <br />
        (<b><?=$model->kec->kepala_desa?></b>)
    </div>
</div>