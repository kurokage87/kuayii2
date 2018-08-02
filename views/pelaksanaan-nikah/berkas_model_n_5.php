<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ctrl = Yii::$app->controller->action->id;
if ($ctrl == 'cetak-berkas-model-n-5-suami'){
    $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' =>$model->suami->id])->all();
    $model2 = $model->suami;
}else{
    $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' =>$model->istri->id])->all();
    $model2 = $model->istri;
}
?>
<br />
<br/>
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
    <div class="text-center">
        <h3><u>SURAT IZIN ORANG TUA</u></h3>
    </div>
    Yang bertanda tangan di bawah ini :
    <?php foreach ($orangTua as $o) { ?>
    <table class="table table-responsive">
        <tr>
            <td>
                <?= $o->status_keluarga == \app\models\OrangTuaCatin::ayah ? '<b>Ayah</b>' : '<b>Ibu</b>'?>
            </td>
        </tr>
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
            <td>Warganegara</td>
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
    Adalah Ayah dan Ibu kandung dari : 
    <table class="table table-responsive">
        <tr>
            <td>1.</td>
            <td>Nama</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->suami->nama_lengkap : $model->istri->nama_lengkap?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Tempat / Tanggal Lahir</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->suami->tempat_lahir.', '.$model->suami->tempat_tgl_lahir : $model->istri->tempat_lahir.', '.$model->istri->tempat_tgl_lahir?></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Warganegara</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->suami->kewarganearaan : $model->istri->kewarganearaan?></td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Agama</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->suami->agama : $model->istri->agama?></td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->suami->pekerjaan : $model->istri->pekerjaan?></td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Alamat</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->suami->alamat : $model->istri->alamat?></td>
        </tr>
    </table>
    Yang memberikan izin kepadanya melakukan Pernikahan dengan :
    <table class="table table-responsive">
        <tr>
            <td>1.</td>
            <td>Nama</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->istri->nama_lengkap : $model->suami->nama_lengkap?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Tempat / Tanggal Lahir</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->istri->tempat_lahir.', '.$model->istri->tempat_tgl_lahir : $model->suami->tempat_lahir.', '.$model->suami->tempat_tgl_lahir?></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Warganegara</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->istri->kewarganearaan : $model->suami->kewarganearaan?></td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Agama</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->istri->agama : $model->suami->agama?></td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->istri->pekerjaan : $model->suami->pekerjaan?></td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Alamat</td>
            <td>:</td>
            <td><?=$ctrl == 'cetak-berkas-model-n-5-suami' ? $model->istri->alamat : $model->suami->alamat?></td>
        </tr>
    </table>
    <p>Demikian Surat Keterangan ini dibuat dengan mengingat sumpah dan untuk digunakan seperlunya</p>
    <div class="text-right">
        <?=$model->kec->nama_kec.', '.date('d F Y')?>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <?php
            foreach ($orangTua as $o){ ?>
            <td>
                <?php
                if ($o->status_keluarga == app\models\OrangTuaCatin::ayah){
                    echo '<b>Ayah</b>';
                } else {
                    echo '<b>Ibu</b>';
                }
                ?>
                <br />
                <br />
                <br />
                <br />
                <br />
                ( <b><?=$o->nama_lengkap?></b> )
            </td>
            <?php
            }
        ?>
        </tr>
        <tr>
            <td colspan="2">
                Kepala Desa <?=$model->kec->nama_kec?>
                <br />
                <br />
                <br />
                <br />
                <br />
                ( <b><?=$model->kec->kepala_desa?></b> )
            </td>
        </tr>
    </table>
</div>
