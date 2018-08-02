<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PelaksanaanNikah */

$this->title = $model->user->username;
$this->params['breadcrumbs'][] = ['label' => 'Pelaksanaan Nikahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelaksanaan-nikah-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="width: 50%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
        <div class="modal-body" width="100%">
          <table class="table table-hover">
              <tr>
                  <td><?=Html::a('Cetak Surat Keterangan Menikah (Suami)',['cetak-berkas-model-n-1-suami', 'id' => $model->id],['class' => 'btn btn-primary'])?></td>
                  <td><?=Html::a('Cetak Surat Keterangan Menikah (Istri)',['cetak-berkas-model-n-1-istri', 'id' => $model->id],['class' => 'btn btn-primary'])?></td>
              </tr>
              <tr>
                  <td><?=Html::a('Cetak Surat Keterangan Asal Usul (Suami)',['cetak-berkas-model-n-2-suami', 'id' => $model->id],['class' => 'btn btn-primary'])?></td>
                  <td><?=Html::a('Cetak Surat Keterangan Asal Usul (Istri)',['cetak-berkas-model-n-2-istri', 'id' => $model->id],['class' => 'btn btn-primary'])?></td>
              </tr>
              <tr>
                  <td><?=Html::a('Cetak Surat Persetujuan Mempelai (Suami)',['cetak-berkas-model-n-3-suami', 'id' => $model->id],['class' => 'btn btn-primary'])?></td>
                  <td><?=Html::a('Cetak Surat Persetujuan Mempelai (Istri)',['cetak-berkas-model-n-3-Istri', 'id' => $model->id],['class' => 'btn btn-primary'])?></td>
              </tr>
              <tr>
                  <td><?=Html::a('Cetak Surat Keterangan Orang Tua (Suami) ',['cetak-berkas-model-n-4-suami', 'id' => $model->id],['class' => 'btn btn-primary'])?></td>
                  <td><?=Html::a('Cetak Surat Keterangan Orang Tua (Istri) ',['cetak-berkas-model-n-4-istri', 'id' => $model->id],['class' => 'btn btn-primary'])?></td>
              </tr>
              <tr>
                  <td><?=Html::a('Cetak Surat Izin Orang Tua (Suami) ',['cetak-berkas-model-n-5-suami', 'id' => $model->id],['class' => 'btn btn-primary'])?></td>
                  <td><?=Html::a('Cetak Surat Izin Orang Tua (Istri) ',['cetak-berkas-model-n-5-istri', 'id' => $model->id],['class' => 'btn btn-primary'])?></td>
              </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <p>
        <?php
        $level = Yii::$app->user->identity->level;
        if ($level == app\models\User::catin && $model->status_nikah == \app\models\PelaksanaanNikah::disetujui_kepala_kua){
        ?>
        
        <?= Html::a('Cetak Akta Nikah Cover', ['cetak-akta-nikah', 'id' => $model->id], ['class' => 'btn btn-success']);?>
            <?= Html::a('Cetak Akta Nikah Isi', ['cetak-akta-nikah-isi', 'id' => $model->id], ['class' => 'btn btn-success']);?>
        <?php
        }elseif ($level == app\models\User::pegdes) {
            echo Html::a('Diperiksa', ['update-pegawai-desa', 'id' => $model->id], ['class' => 'btn btn-info']).' '.
            Html::a('Data Lengkap', ['approve-pegawai-desa', 'id' => $model->id], ['class' => 'btn btn-success']);
//                    .' '.
//                   Html::a('Lengkapi Kembali Persyaratan', ['data-lengkapi', 'id' => $model->id], ['class' => 'btn btn-danger']);
                    
            
        }elseif ($level == app\models\User::kepdes) {
            echo Html::a('Disetujui', ['update-kepala-desa', 'id' => $model->id], ['class' => 'btn btn-info']);
        }elseif ($level == app\models\User::kepkua) {
            echo Html::a('Disetujui', ['update-kepala-kua', 'id' => $model->id], ['class' => 'btn btn-info']);
        }elseif ($level == app\models\User::pegkua) {
            echo Html::a('Diperiksa', ['update-pegawai-kua', 'id' => $model->id], ['class' => 'btn btn-info']).' '.
            Html::a('Data Lengkap', ['approve-pegawai-kua', 'id' => $model->id], ['class' => 'btn btn-success']);
//                    .' '.
//                   Html::a('Lengkapi Kembali Persyaratan', ['data-lengkapi', 'id' => $model->id], ['class' => 'btn btn-danger']);
        }elseif ($level == \app\models\User::catin) { ?>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php }else{
                echo Html::a('Cetak', ['cetak-form', 'id' => $model->id], ['class' => 'btn btn-success']);
        }
        ?>
        <?php
        if ($model->status_nikah == \app\models\PelaksanaanNikah::disetujui_kepala_kua || $model->status_nikah == \app\models\PelaksanaanNikah::disetujui_kepala_desa){
            echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Data Cetak
                  </button>';
        }
        ?>
        
    </p>
    
    <?php
    
    if ($model->tgl_nikah != null){
        echo '<p><h3>Data Jadwal Pelaksanaan Nikah</h3></p>';
        echo DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'user_id',
            'hari_nikah',
            'tgl_nikah',
            'waktu',
            'tempat:html',
            'tgl_daftar',
            [
                'label' => 'Kecamatan',
                'value' => $model->kec->nama_kec
            ],
            'kota',
            'mas_kawin',
            'pembayaran',
            'no_perjanjian_kawin',
            'tgl_surat_perjanjian',
            'nama_notaris',
            [
                'label' => 'Status Pengajuan Nikah',
                'value' => function ($model){
                    if ($model->status_nikah == app\models\PelaksanaanNikah::daftar_nikah){
                        return 'Daftar Nikah';
                    }elseif ($model->status_nikah == app\models\PelaksanaanNikah::diperiksa_pegawai_desa) {
                        return 'Diperiksa Pegawai Desa';
                    }elseif ($model->status_nikah == app\models\PelaksanaanNikah::disetujui_kepala_desa) {
                        return 'Disetujui Kepala Desa';
                    }elseif ($model->status_nikah == app\models\PelaksanaanNikah::diperiksa_pegawai_kua) {
                        return 'Diperiksa Pegawai KUA';
                    }elseif ($model->status_nikah == app\models\PelaksanaanNikah::disetujui_kepala_kua) {
                        return 'Disetujui Kepala KUA';
                    }elseif ($model->status_nikah == app\models\PelaksanaanNikah::lengkap_pegdes) {
                        return 'Data Lengkap (Pegawai Desa)';
                    }elseif ($model->status_nikah == app\models\PelaksanaanNikah::lengkap_pegkua) {
                        return 'Data Lengkap (Pegawai KUA)';
                    }elseif ($model->status_nikah == app\models\PelaksanaanNikah::lengkapi_kembali) {
                        return 'Lengkapi Data Kembali';
                    }elseif ($model->status_nikah == app\models\PelaksanaanNikah::daftar_catin) {
                        return 'Daftar Catin';
                    }
                }
                ],
        ],
    ]);
    }else{
        echo "<p><h3>Status Nikah : ";
        if ($model->status_nikah == app\models\PelaksanaanNikah::daftar_nikah){
            echo 'Daftar Nikah';
        }elseif ($model->status_nikah == app\models\PelaksanaanNikah::diperiksa_pegawai_desa) {
            echo 'Diperiksa Pegawai Desa';
        }elseif ($model->status_nikah == app\models\PelaksanaanNikah::disetujui_kepala_desa) {
            echo 'Disetujui Kepala Desa';
        }elseif ($model->status_nikah == app\models\PelaksanaanNikah::diperiksa_pegawai_kua) {
            echo'Diperiksa Pegawai KUA';
        }elseif ($model->status_nikah == app\models\PelaksanaanNikah::disetujui_kepala_kua) {
            echo 'Disetujui Kepala KUA';
        }elseif ($model->status_nikah == app\models\PelaksanaanNikah::lengkap_pegdes) {
            echo 'Data Lengkap (Pegawai Desa)';
        }elseif ($model->status_nikah == app\models\PelaksanaanNikah::lengkap_pegkua) {
            echo 'Data Lengkap (Pegawai KUA)';
        }elseif ($model->status_nikah == app\models\PelaksanaanNikah::lengkapi_kembali) {
            echo 'Lengkapi Data Kembali';
        }elseif ($model->status_nikah == app\models\PelaksanaanNikah::daftar_catin) {
            echo 'Daftar Catin';
        }
        echo "</h3></p>";
    }
    ?>
    <p>
    <h3>Data Calon Suami</h3>
    </p>
    <?=  DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Nama Lengkap',
                'value' => $model->suami->nama_lengkap
            ],
            [
                'label' => 'Tempat dan Tanggal Lahir',
                'value' => function ($data){
                return $data->suami->tempat_lahir.', '.$data->suami->tempat_tgl_lahir;
                }
            ],
            'suami.no_ktp',
            'suami.kewarganearaan',
            'suami.agama',
            'suami.pekerjaan',
            [
                'label' => 'Status Perkawinan',
                'value' => function($data){
                    if ($data->suami->status_perkawinan == app\models\DataCatin::perjaka){
                        return 'Perjaka';
                    }elseif ($data->suami->status_perkawinan == app\models\DataCatin::perawan){
                        return 'Perawan';
                    }elseif ($data->suami->status_perkawinan == app\models\DataCatin::beristri){
                        return 'Beristri';
                    }elseif ($data->suami->status_perkawinan == app\models\DataCatin::duda) {
                        return 'Duda';
                    }elseif ($data->suami->status_perkawinan == app\models\DataCatin::janda) {
                        return 'Janda';
                    } 
                }
            ],
            'suami.alamat:html',
        ],
    ])?>
    
    
    <?php
    if ($model->suami->status_perkawinan == app\models\DataCatin::duda){
        echo '<p><h3>Daftar Pasangan Sebelumnya</h3></p>'.
        DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Nama Pasangan Sebelumnya',
                'value' => $model->suami->nama_pasangan_sebelumnya
            ],
            [
                'label' => 'Bukti Cerai Instansi',
                'value' => $model->suami->bukti_carai_instansi
            ],
            [
                'label' => 'Gambar Bukti Cerai',
                'value' => $model->suami->bukti_cerai_no
            ],
            [
                'label' => 'Tanggal Cerai',
                'value' => $model->suami->tanggal_cerai
            ]
        ],
    ]);
    }elseif ($model->suami->status_perkawinan == app\models\DataCatin::beristri) {
         $istri = app\models\DetailCatin::find()->where(['data_catin_id' => $model->suami->id])->all();
         echo '<p><h3>Daftar Istri Sebelumnya</h3></p>';
         foreach ($istri as $i){ ?>
            <table id="w1" class="table table-striped table-bordered detail-view">
                <tbody>
                    <tr>
                        <th>Nama Istri Pertama</th>
                        <td><?php
                             if ($i['nama_istri_pertama'] == null){
                                 echo 'Tidak Ada Data Istri';
                             }  else {
                                echo $i['nama_istri_pertama'];
                             }
                        ?></td>
                    </tr>
                    <tr>
                        <th>Nama Istri Kedua</th>
                        <td><?php
                        if ($i['nama_istri_kedua'] == null){
                            echo 'tidak Ada Data Istri';
                        }else{
                            echo $i['nama_istri_kedua'];
                        }
                        ?></td>
                    </tr>
                    <tr>
                        <th>Nama Istri Ketiga</th>
                        <td><?php
                        if ($i['nama_istri_ketiga'] == null){
                            echo 'Tidak Ada Data Istri';
                        }else{
                            echo $i['nama_istri_ketiga'];
                        }
                        ?></td>
                    </tr>
                </tbody>
            </table>
    <?php     }
    }
    ?>
    
    <p>
    <h3>Data Calon Istri</h3>
    </p>
    <?=  DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Nama Lengkap',
                'value' => $model->istri->nama_lengkap
            ],
            [
                'label' => 'Tempat dan Tanggal Lahir',
                'value' => function ($data){
                return $data->istri->tempat_lahir.', '.$data->istri->tempat_tgl_lahir;
                }
            ],
            'suami.no_ktp',
            'suami.kewarganearaan',
            'suami.agama',
            'suami.pekerjaan',
            [
                'label' => 'Status Perkawinan',
                'value' => function($data){
                    if ($data->istri->status_perkawinan == app\models\DataCatin::perjaka){
                        return 'Perjaka';
                    }elseif ($data->istri->status_perkawinan == app\models\DataCatin::perawan){
                        return 'Perawan';
                    }elseif ($data->istri->status_perkawinan == app\models\DataCatin::beristri){
                        return 'Beristri';
                    }elseif ($data->istri->status_perkawinan == app\models\DataCatin::duda) {
                        return 'Duda';
                    }elseif ($data->istri->status_perkawinan == app\models\DataCatin::janda) {
                        return 'Janda';
                    } 
                }
            ],
            'istri.alamat:html',
        ],
    ])?>
    
    <?php
    if ($model->istri->status_perkawinan == app\models\DataCatin::janda){
        echo '<p><h3>Daftar Pasangan Sebelumnya</h3></p>'.
        DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Nama Pasangan Sebelumnya',
                'value' => $model->istri->nama_pasangan_sebelumnya
            ],
            [
                'label' => 'Bukti Cerai Instansi',
                'value' => $model->istri->bukti_carai_instansi
            ],
            [
                'label' => 'Gambar Bukti Cerai',
                'value' => $model->istri->bukti_cerai_no
            ],
            [
                'label' => 'Tanggal Cerai',
                'value' => $model->istri->tanggal_cerai
            ]
        ],
    ]);
    }
    ?>
</div>

