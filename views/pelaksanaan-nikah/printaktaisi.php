<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PelaksanaanNikah */

$this->title = $model->user->username;
$this->params['breadcrumbs'][] = ['label' => 'Pelaksanaan Nikahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="containter">
<!--    <table class="table table-bordered table-striped" style="border: 2px solid black;" >
        <tr>
            <td>
                <p>
                <?php
                $hari = date("D");
                if ($hari == 'Sun'){
                    echo 'Pada hari ini Minggu';
                }elseif ($hari == 'Mon') {
                    echo 'Pada hari ini Senin';
                }elseif ($hari == 'Tue') {
                    echo 'Pada hari ini Selasa';
                }elseif ($hari == 'Wed') {
                    echo 'Pada hari ini Rabu';
                }elseif ($hari == 'Thu') {
                    echo 'Pada hari ini Kamis';
                }elseif ($hari == 'Fri') {
                    echo "Pada hari ini Jum'at";
                }elseif ($hari == 'Sat') {
                    echo 'Pada hari ini Sabtu';
                }
                ?>
                tanggal <?=  date('d')?> bulan <?=date('F')?> tahun <?=date('Y')?> <i>Masehi</i>, telah dilakukan pencatatan nikah sebagai berikut : <br>
                Pada hari <?=$model->hari_nikah?> tanggal <?=$model->tgl_nikah?> <i>Masehi</i>, telah dilangsungkan akad nikah antara :
                </p>
            </td>
        </tr>
        <tr style="border: 2px solid black">
            <td>
                <b>Suami</b>
                <ol>
                    <li>Nama : </li>
                    <li></li>
                </ol>
            </td>
        </tr>
    </table>-->
    <div class="row">
        <div class="col-md-12">
            <p>
                <?php
                $hari = date("D");
                if ($hari == 'Sun'){
                    echo 'Pada hari ini Minggu';
                }elseif ($hari == 'Mon') {
                    echo 'Pada hari ini Senin';
                }elseif ($hari == 'Tue') {
                    echo 'Pada hari ini Selasa';
                }elseif ($hari == 'Wed') {
                    echo 'Pada hari ini Rabu';
                }elseif ($hari == 'Thu') {
                    echo 'Pada hari ini Kamis';
                }elseif ($hari == 'Fri') {
                    echo "Pada hari ini Jum'at";
                }elseif ($hari == 'Sat') {
                    echo 'Pada hari ini Sabtu';
                }
                ?>
                tanggal <?=  date('d')?> bulan <?=date('F')?> tahun <?=date('Y')?> <i>Masehi</i>, telah dilakukan pencatatan nikah sebagai berikut : <br>
                Pada hari <?=$model->hari_nikah?> tanggal <?=$model->tgl_nikah?> <i>Masehi</i>, telah dilangsungkan akad nikah antara :
                </p>
        </div>
        <hr style="border : 3px solid black">
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>1. Suami</h4>
            <ol>
                <li>Nama Lengkap : <?=$model->suami->nama_lengkap?></li>
                <li>Tempat dan Tanggal Lahir : <?=$model->suami->tempat_lahir.', '.$model->suami->tempat_tgl_lahir?></li>
                <li>Kewarganegaraan : <?=$model->suami->kewarganearaan?></li>
                <li>Agama : <?=$model->suami->agama?></li>
                <li>Pekerjaan : <?=$model->suami->pekerjaan?></li>
                <li>Alamat : <?=  strip_tags($model->suami->alamat)?></li>
                
                <?php
                $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' => $model->suami->id])->all();
                foreach ($orangTua as $o) {?>
                <li>
                    <?php if ($o->status_keluarga == \app\models\OrangTuaCatin::ayah){
                        echo 'Orang Tua / Ayah';
                    }else{
                        echo 'Orang Tua / Ibu';
                    }?>
                    <ol type="a">
                        <li>Nama Lengkap : <?=$o->nama_lengkap?></li>
                        <li>Tempat dan Tanggal Lahir : <?=$o->tempat_lahir.', '.$o->tempat_tgl_lahir?></li>
                        <li>No Induk KTP : <?=$o->no_ktp?></li>
                        <li>Kewarganegaraan : <?=$o->kewarganearaan?></li>
                        <li>Agama : <?=$o->agama?></li>
                        <li>Pekerjaan : <?=$o->pekerjaan?></li>
                        <li>Alamat Sekarang : <?=  strip_tags($o->alamat)?></li>
                    </ol>
                    </li>
                <?php } ?>
                <li>Status Perkawinan : <?php
                 if ($model->suami->status_perkawinan == app\models\DataCatin::perjaka){
                        echo 'Perjaka';
                    }elseif ($model->suami->status_perkawinan == app\models\DataCatin::perawan){
                        echo 'Perawan';
                    }elseif ($model->suami->status_perkawinan == app\models\DataCatin::beristri){
                        echo 'Beristri';
                    }elseif ($model->suami->status_perkawinan == app\models\DataCatin::duda) {
                        echo 'Duda';
                    }elseif ($model->suami->status_perkawinan == app\models\DataCatin::janda) {
                        echo 'Janda';
                    } 
                ?></li>
                <?php
                    if ($model->suami->status_perkawinan == \app\models\DataCatin::duda){ ?>
                    Jika duda, bekas istri
                    <ol type="a">
                        <li>Nama : <?=$model->suami->nama_pasangan_sebelumnya?></li>
                        <li>Bukti Cerai Berupa : 
                            <ol>
                                <li>Instasi : <?=$model->suami->bukti_carai_instansi?></li>
                                <li>Tanggal Cerai : <?=$model->suami->tanggal_cerai?></li>
                            </ol>
                        </li>
                        
                    </ol>
                    <?php }elseif ($model->suami->status_perkawinan == \app\models\DataCatin::beristri) {
                        $detail = app\models\DetailCatin::find()->where(['data_catin_id' => $model->suami->id])->all();
                        foreach ($detail as $d) {?>
                        Jika Beristri : 
                        <ol type="A">
                            <li>Istri Ke 1
                                <ol type="a">
                                    <li>Nama : <?=$d->nama_istri_pertama?></li>
                                    <li>Kutipan Akta Nikah : <?=$d->k_akta_nikah_pertama?></li>
                                    <li>Tanggal : <?=$d->tgl_akta_pertama?></li>
                                </ol>
                            </li>
                            <li>Istri Ke 2
                                <ol type="a">
                                    <li>Nama : <?=$d->nama_istri_kedua?></li>
                                    <li>Kutipan Akta Nikah : <?=$d->k_akta_nikah_kedua?></li>
                                    <li>Tanggal : <?=$d->tgl_akta_kedua?></li>
                                </ol>
                            </li>
                            <li>Istri Ke 3
                                <ol type="a">
                                    <li>Nama : <?=$d->nama_istri_ketiga?></li>
                                    <li>Kutipan Akta Nikah : <?=$d->k_akta_nikah_ketiga?></li>
                                    <li>Tanggal : <?=$d->tgl_akta_ketiga?></li>
                                </ol>
                            </li>
                        </ol>
                        <?php }
                    } ?>
                        <li>Pernikahan Ke : <?=$model->suami->pernikahan_ke?></li>
                        <li>Adakah Hubungan nasab, <i>radla'ah</i> atau <i>mushaharah</i> (semenda) antara calon istri dengan :
                            <ol type="a">
                                <li>Dia Sendiri : <?=$model->suami->nasab_a?></li>
                                <li>Bekas Istri : <?=$model->suami->nasab_b?></li>
                                <li>Istri / Istri-istri : <?=$model->suami->nasab_c?></li>
                            </ol>
                        </li>
                        <?php if ($model->suami->nama_pejabat_pemberi_izin != null){ ?>
                        <li>Jika calon suami anggota TNI/POLRI : 
                            <ol type="a">
                                <li>Pejabat pemberi izin : <?=$model->suami->nama_pejabat_pemberi_izin?></li>
                                <li>Nomor : <?=$model->suami->nomor_izin_pejabat?></li>
                                <li>Tanggal : <?=$model->suami->tgl_izin_surat?></li>
                            </ol>
                        </li>
                        <?php }if ($model->suami->wna_instansi !=null) { ?>
                        <li>Jika yang bersangkutan WNA : 
                            <ol type="a">
                                <li>Instansi pemberi izin : <?=$model->suami->wna_instansi?></li>
                                <li>Nomor : <?=$model->suami->wna_no_izin?></li>
                                <li>Tanggal : <?=$model->suami->wna_tgl_surat?></li>
                            </ol>
                        </li>
                        <?php }if ($model->suami->izin_pengadilan_belum_umur != null) { ?>
                        <li>Jika Belum umur 19 tahun : 
                            <ol type="a">
                                <li>Izin pengadilan : <?=$model->suami->izin_pengadilan_belum_umur?></li>
                                <li>Nomor : <?=$model->suami->no_izin_pengadilan_belum_umur?></li>
                                <li>Tanggal : <?=$model->suami->tgl_izin_pengadilan_belum_umur?></li>
                            </ol>
                        </li>    
                        <?php }if ($model->suami->nama_pemeberi_izin!= null) { ?>
                        <li>Jika Belum umur 21 tahun : 
                            <ol type="a">
                                <li>Izin pengadilan : <?=$model->suami->nama_pemeberi_izin?></li>
                                <li>Nomor : <?=$model->suami->hubungan_keluarga?></li>
                                <li>Tanggal : <?=$model->suami->tgl_surat?></li>
                            </ol>
                        </li>    
                        <?php } ?>
            </ol>
            <h4>2. Istri</h4>
            <ol>
                <li>Nama Lengkap : <?=$model->istri->nama_lengkap?></li>
                <li>Tempat dan Tanggal Lahir : <?=$model->istri->tempat_lahir.', '.$model->istri->tempat_tgl_lahir?></li>
                <li>Kewarganegaraan : <?=$model->istri->kewarganearaan?></li>
                <li>Agama : <?=$model->istri->agama?></li>
                <li>Pekerjaan : <?=$model->istri->pekerjaan?></li>
                <li>Alamat : <?=  strip_tags($model->istri->alamat)?></li>
                
                <?php
                $orangTua = \app\models\OrangTuaCatin::find()->where(['data_catin_id' => $model->istri->id])->all();
                foreach ($orangTua as $o) {?>
                <li>
                    <?php if ($o->status_keluarga == \app\models\OrangTuaCatin::ayah){
                        echo 'Orang Tua / Ayah';
                    }else{
                        echo 'Orang Tua / Ibu';
                    }?>
                    <ol type="a">
                        <li>Nama Lengkap : <?=$o->nama_lengkap?></li>
                        <li>Tempat dan Tanggal Lahir : <?=$o->tempat_lahir.', '.$o->tempat_tgl_lahir?></li>
                        <li>No Induk KTP : <?=$o->no_ktp?></li>
                        <li>Kewarganegaraan : <?=$o->kewarganearaan?></li>
                        <li>Agama : <?=$o->agama?></li>
                        <li>Pekerjaan : <?=$o->pekerjaan?></li>
                        <li>Alamat Sekarang : <?=  strip_tags($o->alamat)?></li>
                    </ol>
                    </li>
                <?php } ?>
                <li>Status Perkawinan : <?php
                 if ($model->istri->status_perkawinan == app\models\DataCatin::perawan){
                        echo 'Perawan';
                    }elseif ($model->istri->status_perkawinan == app\models\DataCatin::janda) {
                        echo 'Janda';
                    } 
                ?></li>
                <?php
                    if ($model->istri->status_perkawinan == \app\models\DataCatin::janda){ ?>
                    Jika janda, bekas suami
                    <ol type="a">
                        <li>Nama : <?=$model->istri->nama_pasangan_sebelumnya?></li>
                        <li>Bukti Cerai Berupa : 
                            <ol>
                                <li>Instasi : <?=$model->istri->bukti_carai_instansi?></li>
                                <li>Tanggal Cerai : <?=$model->istri->tanggal_cerai?></li>
                            </ol>
                        </li>
                        
                    </ol>
                    <?php } ?>
                        <li>Pernikahan Ke : <?=$model->istri->pernikahan_ke?></li>
                        <li>Adakah Hubungan nasab, <i>radla'ah</i> atau <i>mushaharah</i> (semenda) antara calon istri dengan :
                            <ol type="a">
                                <li>Dia Sendiri : <?=$model->istri->nasab_a?></li>
                                <li>Bekas Istri : <?=$model->istri->nasab_b?></li>
                                <li>Istri / Istri-istri : <?=$model->suami->nasab_c?></li>
                            </ol>
                        </li>
                        <?php if ($model->istri->nama_pejabat_pemberi_izin != null){ ?>
                        <li>Jika calon suami anggota TNI/POLRI : 
                            <ol type="a">
                                <li>Pejabat pemberi izin : <?=$model->istri->nama_pejabat_pemberi_izin?></li>
                                <li>Nomor : <?=$model->istri->nomor_izin_pejabat?></li>
                                <li>Tanggal : <?=$model->istri->tgl_izin_surat?></li>
                            </ol>
                        </li>
                        <?php }if ($model->istri->wna_instansi !=null) { ?>
                        <li>Jika yang bersangkutan WNA : 
                            <ol type="a">
                                <li>Instansi pemberi izin : <?=$model->istri->wna_instansi?></li>
                                <li>Nomor : <?=$model->istri->wna_no_izin?></li>
                                <li>Tanggal : <?=$model->istri->wna_tgl_surat?></li>
                            </ol>
                        </li>
                        <?php }if ($model->istri->izin_pengadilan_belum_umur != null) { ?>
                        <li>Jika Belum umur 19 tahun : 
                            <ol type="a">
                                <li>Izin pengadilan : <?=$model->istri->izin_pengadilan_belum_umur?></li>
                                <li>Nomor : <?=$model->istri->no_izin_pengadilan_belum_umur?></li>
                                <li>Tanggal : <?=$model->istri->tgl_izin_pengadilan_belum_umur?></li>
                            </ol>
                        </li>    
                        <?php }if ($model->istri->nama_pemeberi_izin!= null) { ?>
                        <li>Jika Belum umur 21 tahun : 
                            <ol type="a">
                                <li>Izin pengadilan : <?=$model->istri->nama_pemeberi_izin?></li>
                                <li>Nomor : <?=$model->istri->hubungan_keluarga?></li>
                                <li>Tanggal : <?=$model->istri->tgl_surat?></li>
                            </ol>
                        </li>    
                        <?php } ?>
            </ol>
        </div>
    </div>
</div>
