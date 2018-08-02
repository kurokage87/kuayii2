<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ctrl = Yii::$app->controller->action->id;
if ($ctrl == 'cetak-berkas-model-n-4-suami'){
    $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' =>$model->suami->id])->all();
    $model2 = $model->suami;
}else{
    $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' =>$model->istri->id])->all();
    $model2 = $model->istri;
}
?>
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
        <h3><u>SURAT KETERANGAN TENTANG ORANG TUA</u></h3>
        <p>Nomor : <?=$model->id?> /SKN/KPKD/IV<?=date('Y')?></p>
    </div>
    <br />
    Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :
    <?php foreach ($orangTua as $o) { ?>
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
    <br />
    <?php } ?>
    Adalah benar Ayah dan Ibu kandung dari seorang : 
    <table class="table table-responsive">
        <tr>
            <td>1.</td>
            <td>Nama</td>
            <td>:</td>
            <td><?=$model2->nama_lengkap?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Tempat / Tanggal Lahir</td>
            <td>:</td>
            <td><?=$model2->tempat_lahir.', '.$model2->tempat_tgl_lahir?></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Warganegara</td>
            <td>:</td>
            <td><?=$model2->kewarganearaan?></td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Agama</td>
            <td>:</td>
            <td><?=$model2->agama?></td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?=$model2->pekerjaan?></td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Alamat</td>
            <td>:</td>
            <td><?=$model2->alamat?></td>
        </tr>
    </table>
    <br />
    <p>Demikianlah Surat Keterangan ini dibuat dengan mengingat sumpah dan untuk digunakan seperlunya.</p>
    <br />
    <?=$model->kec->nama_kec.', '.date('d F Y')?>
    <p>
        Kepala Desa <?=$model->kec->nama_kec?>
    </p>
    <br />
    <br />
    <br/>
    <br/>
    ( <b><?=$model->kec->kepala_desa?></b> )
</div>

