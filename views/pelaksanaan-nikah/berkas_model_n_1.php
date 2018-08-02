<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ctrl = Yii::$app->controller->action->id;
if ($ctrl == 'cetak-berkas-model-n-1-suami'){
    $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' =>$model->suami->id])->andWhere(['status_keluarga' => \app\models\OrangTuaCatin::ayah])->all();
}else{
    $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' =>$model->istri->id])->andWhere(['status_keluarga' => \app\models\OrangTuaCatin::ayah])->all();
}
?>
<div class="container">
    <div class="text-left">
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
    </div>
    <div class="text-center">
        <p>
        <h4><U>SURAT KETERANGAN UNTUK MENIKAH</U></h4></p><p>
        Nomor : <?=$model->id?> /SKN/KPKD/IV-<?= date('Y')?>
    </p>
    </div>
    <div class="text-left">
        <p>Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</p>
        <table class="table table-responsive">
            <tr>
                <td>1.</td>
                <td>Nama</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-1-suami' ? $model->suami->nama_lengkap : $model->istri->nama_lengkap?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?php
                    if ($ctrl == 'cetak-berkas-model-n-1-suami'){
                        if ($model->suami->status_data == \app\models\DataCatin::suami){
                            echo 'Laki-Laki';
                        }else{
                            echo 'Perempuan';
                        }
                    }else{
                        if ($model->istri->status_data == \app\models\DataCatin::istri){
                            echo 'Perempuan';
                        }else{
                            echo 'Laki-Laki';
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-1-suami' ? $model->suami->tempat_lahir.', '.$model->suami->tempat_tgl_lahir : $model->istri->tempat_lahir.', '.$model->istri->tempat_tgl_lahir?></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-1-suami' ? $model->suami->kewarganearaan : $model->istri->kewarganearaan?></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Agama</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-1-suami' ? $model->suami->agama : $model->istri->agama?></td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-1-suami' ? $model->suami->pekerjaan : $model->istri->pekerjaan?></td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Alamat</td>
                <td>:</td>
                <td><?=$ctrl == 'cetak-berkas-model-n-1-suami' ? $model->suami->alamat : $model->istri->alamat?></td>
            </tr>
            <tr>
                <td>8.</td>
                <td>
                    <?=$ctrl == 'cetak-berkas-model-n-1-suami' ? 'Bin' : 'Binti'?>
                </td>
                <td>:</td>
                <td>
                    <?php
                    foreach ($orangTua as $o) {
                        echo $o->nama_lengkap;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Status Perkawinan</td>
                <td>:</td>
                <td>
                    <?php
                    if ($ctrl == 'cetak-berkas-model-n-1-suami'){
                        if ($model->suami->status_perkawinan == \app\models\DataCatin::perjaka){
                            echo '<b>Jejaka</b>';
                        }elseif ($model->suami->status_perkawinan == \app\models\DataCatin::duda) {
                            echo '<b>Duda</b>';
                        }elseif ($model->suami->status_perkawinan == \app\models\DataCatin::beristri) {
                            $detail = app\models\DetailCatin::find()->where(['data_catin_id' == $model->suami->id])->all();
                            foreach ($detail as $d) {
                               echo '<p><b>Beristri</b></p>'
                                . '<p><ol type="1">'
                                       . '<li>'.$d->nama_istri_pertama == null ? 'Kosong' : $d->nama_istri_pertama.'</li>'
                                       . '<li>'.$d->nama_istri_kedua == null ? 'Kosong' : $d->nama_istri_kedua.'</li>'
                                       . '<li>'.$d->nama_istri_ketiga == null ? 'Kosong' : $d->nama_istri_ketiga.'</li>'
                                       . '</ol></p>'; 
                            }
                        }
                    }else{
                        if ($model->istri->status_perkawinan == \app\models\DataCatin::perawan){
                            echo '<b>Perawan</b>';
                        }elseif ($model->istri->status_perkawinan == \app\models\DataCatin::janda) {
                            echo '<b>Janda</b>';
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>10.</td>
                <td>
                    <?=$ctrl == 'cetak-berkas-model-n-1-suami' ? 'Nama Istri Terdahulu' : 'Nama Suami Terdahulu'?>
                </td>
                <td>:</td>
                <td>
                    <?php
                        if ($ctrl == 'cetak-berkas-model-n-1-suami'){
                        if ($model->suami->status_perkawinan == \app\models\DataCatin::perjaka){
                            echo '<b>Jejaka</b>';
                        }elseif ($model->suami->status_perkawinan == \app\models\DataCatin::duda) {
                            echo $model->suami->nama_pasangan_sebelumnya;
                        }elseif ($model->suami->status_perkawinan == \app\models\DataCatin::beristri) {
                          echo '-';  
                        }
                    }else{
                        if ($model->istri->status_perkawinan == \app\models\DataCatin::perawan){
                            echo '<b>Perawan</b>';
                        }elseif ($model->istri->status_perkawinan == \app\models\DataCatin::janda) {
                            echo $model->istri->nama_pasangan_sebelumnya;
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>
        <p>
            Demikian surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk di gunakan seperlunya.
        </p>
        
        <p>
            <?=$model->kec->nama_kec.', '. date('d F Y')?></p>
        <p>Kepala Desa <?=$model->kec->nama_kec?>
        </p>
        <br />
        <br />
        <br />
        <br />
        <br />
        (<b><?=$model->kec->kepala_desa?></b>)
    </div>
</div>