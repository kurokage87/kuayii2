<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataCatin */

$this->title = $model->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Data Catins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?= Yii::getAlias('@web/upload/data-catin/' . $model->foto) ?>" alt="User profile picture">

                <h3 class="profile-username text-center"><?= $model->nama_lengkap ?></h3>

                <p class="text-muted text-center"><?= $model->no_ktp ?></p>

                <ul class="list-group list-group-unbordered">
                    
                </ul>

                <a href="<?=  \yii\helpers\Url::toRoute(['data-catin/update', 'id' => $model->id])?>" class="btn btn-primary btn-block"><b>Update</b></a>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Biodata Catin</a></li>
                <li><a href="#timeline" data-toggle="tab">Biodata Orang Tua</a></li>
                <?php
                if ($model->status_perkawinan == app\models\DataCatin::duda){
                    echo '<li><a href="#timeline1" data-toggle="tab">Biodata Istri Sebelumnya</a></li>';
                }elseif ($model->status_perkawinan == app\models\DataCatin::janda) {
                    echo '<li><a href="#timeline1" data-toggle="tab">Biodata Suami Sebelumnya</a></li>';
                }elseif ($model->status_perkawinan == app\models\DataCatin::beristri) {
                    echo '<li><a href="#timeline1" data-toggle="tab">Biodata Istri-Istri</a></li>';
                }
                ?>

            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                        <div class="user-block">
      <!--                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                              <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                                <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                              </span>
                          <span class="description">Shared publicly - 7:30 PM today</span>-->
                        </div>
                        <!-- /.user-block -->
                        <p>
                            <?=
                            DetailView::widget([
                                'model' => $model,
                                'attributes' => [
//                                    'id',
                                    'user.username',
                                    'nama_lengkap',
                                    'tempat_tgl_lahir',
                                    'no_ktp',
                                    'kewarganearaan',
                                    'pekerjaan',
                                    'agama',
                                    'alamat:html',
                                    [
                                        'label' => 'Status Catin',
                                        'value' => function ($data) {
                                            if ($data->status_data == app\models\DataCatin::suami) {
                                                return 'Suami';
                                            } else {
                                                return 'Istri';
                                            }
                                        }
                                    ],
                                    [
                                        'label' => 'Status Sebelum Menikah',
                                        'value' => function ($data) {
                                            if ($data->status_perkawinan == app\models\DataCatin::perawan) {
                                                return 'Perawan';
                                            } elseif ($data->status_perkawinan == app\models\DataCatin::perjaka) {
                                                return 'Perjaka';
                                            }elseif($data->status_perkawinan == app\models\DataCatin::duda){
                                                return 'Duda';
                                            }elseif($data->status_perkawinan == app\models\DataCatin::janda){
                                                return 'Janda';
                                            }elseif($data->status_perkawinan == app\models\DataCatin::beristri){
                                                return 'Beristri';
                                            }
                                        }
                                    ],
                                ],
                            ])
                            ?>
                        </p>
                        <ul class="list-inline">
      <!--                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                          <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                          </li>
                          <li class="pull-right">
                            <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                              (5)</a></li>-->
                        </ul>

<!--                  <input class="form-control input-sm" type="text" placeholder="Type a comment">-->
                    </div>
                    <!-- /.post -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="post">
                        <div class="user-block">
                            <?= Html::a('Tambah Orang Tua', ['orang-tua-catin/create'],['class' => 'btn btn-success'])?>
      <!--                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                              <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                                <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                              </span>
                          <span class="description">Shared publicly - 7:30 PM today</span>-->
                        </div>
                        <!-- /.user-block -->
                        <p>
                        <div class="row">
                            <?php
                            $ortu = app\models\OrangTuaCatin::find()->where(['data_catin_id' => $model->id])->all();
                            foreach ($ortu as $o) {
                                ?>
                                <div class="col-md-6">
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><?= $o->nama_lengkap?></h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <strong><i class="fa fa-book margin-r-5"></i> Tempat, Tanggal Lahir</strong>

                                            <p class="text-muted">
                                                <?=$o->tempat_lahir.', '.$o->tempat_tgl_lahir?>
                                            </p>

                                            <hr>

                                            <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

                                            <p class="text-muted"><?=$o->alamat?></p>

                                            <hr>

                                            <strong><i class="fa fa-pencil margin-r-5"></i> Status Keluarga</strong>

                                            <p class="text-muted">
                                                <?php if ($o->status_keluarga == app\models\OrangTuaCatin::ayah){
                                                    echo 'Ayah';
                                                }else{
                                                    echo 'Ibu';
                                                }
?>
                                            </p>
                                            
                                            <hr>
                                            <?= Html::a('Detail Orang Tua', ['orang-tua-catin/view', 'id' => $o->id], ['class' => 'btn btn-primary'])?>
                                            
                                        </div>
                                    </div>
                                </div>
<?php } ?>
                        </div>
                        </p>

                        <hr>


                    </div>
                    <!-- /.box-body -->
                </div>
                <?php 
                if ($model->status_perkawinan == app\models\DataCatin::janda || $model->status_perkawinan == \app\models\DataCatin::duda){ ?>
                <div class="tab-pane" id="timeline1">
                    <!-- The timeline -->
                    <div class="post">
                        <div class="user-block">
                            <?= Html::a('Ubah Data Cerai', ['data-catin/cerai', 'id' => $model->id],['class' => 'btn btn-success'])?>
      <!--                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                              <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                                <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                              </span>
                          <span class="description">Shared publicly - 7:30 PM today</span>-->
                        </div>
                        <!-- /.user-block -->
                        <p>
                        <div class="row">
                            <div class="col-md-12">
                                <?=  DetailView::widget([
                                'model' => $model,
                                'attributes' => [
                                    [
                                      'label' => 'Nama Pasangan Sebelumnya',
                                      'value' => $model->nama_pasangan_sebelumnya
                                    ],
                                    [
                                        'label' => 'Bukti Cerai Dari Instansi',
                                        'value' => $model->bukti_carai_instansi
                                    ],
                                    [
                                        'label' => 'Bukti Cerai No',
                                        'value' => $model->bukti_cerai_no
                                    ],
                                    [
                                        'label' =>'Tanggal Cerai',
                                        'value' => $model->tanggal_cerai
                                    ]
                                ],
                            ])?>
                            </div>
                        </div>
                        </p>

                        <hr>


                    </div>
                    <!-- /.box-body -->
                </div>
                <?php }elseif ($model->status_perkawinan == \app\models\DataCatin::beristri) {
                    $istri = app\models\DetailCatin::find()->where(['data_catin_id' => $model->id])->all();
                    foreach ($istri as $i) {
                    ?>                    
                  <div class="tab-pane" id="timeline1">
                    <!-- The timeline -->
                    <div class="post">
                        <div class="user-block">
                            <?= Html::a('Ubah Detail Istri', ['detail-catin/update', 'id' => $i->id],['class' => 'btn btn-success'])?>
      <!--                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                              <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                                <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                              </span>
                          <span class="description">Shared publicly - 7:30 PM today</span>-->
                        </div>
                        <!-- /.user-block -->
                   
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <div class="box-title">Istri Pertama</div>
                                        <div class="box-body">
                                            <strong><i class="fa fa-user margin-r-5"></i>Nama Lengkap</strong>
                                            <p class="text-muted">
                                                <?=$i->nama_istri_pertama?>
                                            </p>
                                            <hr>
                                            <strong><i class="fa fa-user margin-r-5"></i>Kutipan Akta Nikah </strong>
                                            <p class="text-muted">
                                                <?=$i->k_akta_nikah_pertama?>
                                            </p>
                                            <hr>
                                            <strong><i class="fa fa-user margin-r-5"></i>No Akta Nikah </strong>
                                            <p class="text-muted">
                                                <?=$i->no_akta_pertama?>
                                            </p>
                                            <hr>
                                            <strong><i class="fa fa-user margin-r-5"></i>Tanggal Akta Nikah </strong>
                                            <p class="text-muted">
                                                <?=$i->tgl_akta_pertama?>
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <div class="box-title">Istri Kedua</div>
                                        <div class="box-body">
                                            <strong><i class="fa fa-user margin-r-5"></i>Nama Lengkap</strong>
                                            <p class="text-muted">
                                                <?=$i->nama_istri_kedua?>
                                            </p>
                                            <hr>
                                            <strong><i class="fa fa-user margin-r-5"></i>Kutipan Akta Nikah </strong>
                                            <p class="text-muted">
                                                <?=$i->k_akta_nikah_kedua?>
                                            </p>
                                            <hr>
                                            <strong><i class="fa fa-user margin-r-5"></i>No Akta Nikah </strong>
                                            <p class="text-muted">
                                                <?=$i->no_akta_kedua?>
                                            </p>
                                            <hr>
                                            <strong><i class="fa fa-user margin-r-5"></i>Tanggal Akta Nikah </strong>
                                            <p class="text-muted">
                                                <?=$i->tgl_akta_kedua?>
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-12">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <div class="box-title">Istri Ketiga</div>
                                        <div class="box-body">
                                            <strong><i class="fa fa-user margin-r-5"></i>Nama Lengkap</strong>
                                            <p class="text-muted">
                                                <?=$i->nama_istri_ketiga?>
                                            </p>
                                            <hr>
                                            <strong><i class="fa fa-user margin-r-5"></i>Kutipan Akta Nikah </strong>
                                            <p class="text-muted">
                                                <?=$i->k_akta_nikah_ketiga?>
                                            </p>
                                            <hr>
                                            <strong><i class="fa fa-user margin-r-5"></i>No Akta Nikah </strong>
                                            <p class="text-muted">
                                                <?=$i->no_akta_ketiga?>
                                            </p>
                                            <hr>
                                            <strong><i class="fa fa-user margin-r-5"></i>Tanggal Akta Nikah </strong>
                                            <p class="text-muted">
                                                <?=$i->tgl_akta_ketiga?>
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        

                    </div>
                    <!-- /.box-body -->
                </div>
                <?php 
                    }
                }
                ?>
                
                <ul class="list-inline">
<!--                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                  </li>
                  <li class="pull-right">
                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                      (5)</a></li>-->
                </ul>

<!--                  <input class="form-control input-sm" type="text" placeholder="Type a comment">-->
            </div>
        </div>
        <!-- /.tab-pane -->


        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>
<!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div>