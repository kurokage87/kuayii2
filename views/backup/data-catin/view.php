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
                                    'id',
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