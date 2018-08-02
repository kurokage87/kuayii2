<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ctrl = Yii::$app->controller->action->id;
if ($ctrl == 'cetak-berkas-model-n-3-suami'){
    $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' =>$model->suami->id])->andWhere(['status_keluarga' => \app\models\OrangTuaCatin::ayah])->all();
}else{
    $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' =>$model->istri->id])->andWhere(['status_keluarga' => \app\models\OrangTuaCatin::ayah])->all();
}
?>
<br>
<br/>
<div class="container">
    <div class="text-center">
        <h3><u>SURAT PERSETUJUAN MEMPELAI</u></h3>
    </div>
    <br/>
    Yang bertanda tangan di bawah ini :
    <ol type="I">
        <li>
            <?=$ctrl == 'cetak-berkas-model-n-3-suami' ? 'Calon Suami : ' : 'Calon Istri : ' ?>
            <table class="table table-responsive">
                <tr>
                    <td>1.</td>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->suami->nama_lengkap : $model->istri->nama_lengkap?></td>
                </tr>
                <?php foreach ($orangTua as $o) { ?>
                <tr>
                    <td>2.</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? 'Bin' : 'Binti'?></td>
                    <td>:</td>
                    <td><?= $o->nama_lengkap ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td>3.</td>
                    <td>Tempat / Tanggal Lahir</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->suami->tempat_lahir.', '.$model->suami->tempat_tgl_lahir : $model->istri->tempat_lahir.', '.$model->istri->tempat_tgl_lahir?></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->suami->kewarganearaan : $model->istri->kewarganearaan?></td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->suami->agama : $model->istri->agama?></td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->suami->pekerjaan : $model->istri->pekerjaan?></td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->suami->alamat : $model->istri->alamat?></td>
                </tr>
            </table>
        </li>
        <li>
            <?=$ctrl == 'cetak-berkas-model-n-3-suami' ? 'Calon Istri : ' : 'Calon Suami : ' ?>
            <table class="table table-responsive">
                <tr>
                    <td>1.</td>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->istri->nama_lengkap : $model->suami->nama_lengkap?></td>
                </tr>
                <?php foreach ($orangTua as $o) { ?>
                <tr>
                    <td>2.</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? 'Bin' : 'Binti'?></td>
                    <td>:</td>
                    <td><?= $o->nama_lengkap ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td>3.</td>
                    <td>Tempat / Tanggal Lahir</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->istri->tempat_lahir.', '.$model->istri->tempat_tgl_lahir : $model->suami->tempat_lahir.', '.$model->suami->tempat_tgl_lahir?></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->istri->kewarganearaan : $model->suami->kewarganearaan?></td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->istri->agama : $model->suami->agama?></td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->istri->pekerjaan : $model->suami->pekerjaan?></td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?=$ctrl == 'cetak-berkas-model-n-3-suami' ? $model->istri->alamat : $model->suami->alamat?></td>
                </tr>
            </table>
        </li>
    </ol>
    <p>Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa paksaan dari siapapun juga, setuju untuk menlangsungkan pernikahan.</p>
    <p>
        Demikianlah Surat Keterangan ini dibuat dengan mengingat sumpah dan untuk digunakan seperlunya.
    </p>

     <div class="text-right">
        <?=$model->kec->nama_kec.', '.date('d F Y')?>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <td>
                <b>Calon Suami</b>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                (<b><?=$model->suami->nama_lengkap?></b>)
            </td>
            <td>
                <b>Calon Istri</b>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                (<b><?=$model->istri->nama_lengkap?></b>)
            </td>
        </tr>
    </table>
</div>
