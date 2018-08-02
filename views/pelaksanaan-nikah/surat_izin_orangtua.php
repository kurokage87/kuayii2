<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$orangTuaSuami = 
//$orangTuaIstri = app\models\OrangTuaCatin::find()->where(['data_catin_id' => $model->istri->id])->all();
$ctrl = Yii::$app->controller->action->id;
if ($ctrl == 'cetak-izin-orang-tua-suami'){
    $orangTua = app\models\OrangTuaCatin::find()->where(['data_catin_id' => $model->suami->id])->all();
}else{
    $orangTua = app\models\OrangTuaCatin::find()->where(['data_catin_id' => $model->istri->id])->all();
}
?>
<div class="container">
    <div class="text-center">
        <h3><u>SURAT IZIN ORANG TUA</u></h3>
    </div>
    <br />
    <p>
        Yang bertanda tangan dibawah ini : 
    </p>
    <p>
    <table class="table table-hover">
        <?php
            foreach ($orangTua as $o) { ?>
            <tr>
                    <td><b><?php
                     if ($o->status_keluarga == app\models\OrangTuaCatin::ayah){
                         echo 'Ayah';
                     }else{
                         echo 'Ibu';
                     }
                    ?></b></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><b><?=$o->nama_lengkap?></b></td>
                </tr>
                <tr>
                    <td>Tempat / Tanggal Lahir</td>
                    <td>:</td>
                    <td><?=$o->tempat_lahir.', '.$o->tempat_tgl_lahir?></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td><?=$o->kewarganearaan?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?=$o->agama?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?=$o->pekerjaan?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?=$o->alamat?></td>
                </tr>
        <?php 
            }
        ?>
                <tr>
                    <td><br/></td>
                </tr>
                <tr>
                    <td>Adalah Ayah dan Ibu Kandung dari :</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->suami->nama_lengkap : $model->istri->nama_lengkap ?></td>
                </tr>
                <tr>
                    <td>Tempat / Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->suami->tempat_lahir.', '.$model->suami->tempat_tgl_lahir : $model->istri->tempat_lahir.', '.$model->istri->tempat_tgl_lahir?></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->suami->kewarganearaan : $model->istri->kewarganearaan?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->suami->agama : $model->istri->agama?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->suami->pekerjaan : $model->istri->pekerjaan?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->suami->alamat : $model->istri->alamat?></td>
                </tr>
                <tr>
                    <td><br/></td>
                </tr>
                <tr>
                    <td>Yang memberikan izin kepadanya untuk melakukan pernikahan dengan : </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->istri->nama_lengkap : $model->suami->nama_lengkap ?></td>
                </tr>
                <tr>
                    <td>Tempat / Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->istri->tempat_lahir.', '.$model->istri->tempat_tgl_lahir : $model->suami->tempat_lahir.', '.$model->suami->tempat_tgl_lahir?></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->istri->kewarganearaan : $model->suami->kewarganearaan?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->istri->agama : $model->suami->agama?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->istri->pekerjaan : $model->suami->pekerjaan?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $ctrl == 'cetak-izin-orang-tua-suami' ? $model->istri->alamat : $model->suami->alamat?></td>
                </tr>
    </table>
    </p>
    <div class="text-right">
        <?=$model->kec->nama_kec.', '.date('d F Y')?>
    </div>
    <br />
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
                <br />
                <br />
                ( <b><?=$o->nama_lengkap?></b> )
            </td>
            <?php
            }
        ?>
        </tr>
    </table>
    <br />
    <table class="table table-hover text-center">
        <tr>
            <td>
                Diketahui oleh : <br />
                Kepala Desa <?= $model->kec->nama_kec?>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                (<b><?=$model->kec->kepala_desa?></b>)
            </td>
        </tr>
    </table>
</div>
    
