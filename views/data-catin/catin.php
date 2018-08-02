<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = 'List Nama Calon Pengantin';
?>
<div class="row">
    <div class="col-md-12">
        <p>
            <?=\yii\helpers\Html::a('Buat Biodata', ['data-catin/create'], ['class' => 'btn btn-info']);?>
            
            <?php
            $p = \app\models\PelaksanaanNikah::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
            
            if ($p != null && $suami != null && $istri != null){
//                echo \yii\helpers\Html::a('Kirim Data Ke Desa',['pelaksanaan-nikah/data-catin'],['class' => 'btn btn-success']);          
            }elseif ($istri != null && $suami != null) {
                echo yii\helpers\Html::a('Kirim Data',['pelaksanaan-nikah/data-catin'],['class' => 'btn btn-success']);
            }
            ?>
        </p>
        
    </div>
</div>

<div class="row">
    
<?php
foreach ($suami as $s) {
?>
<div class="col-md-6">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?=  Yii::getAlias('@web/upload/data-catin/'.$s->foto)?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?=$s->nama_lengkap?></h3>

              <p class="text-muted text-center"><?php
                  if ($s->status_data == \app\models\DataCatin::suami){
                      echo 'Suami';
                  }else{
                      echo'Istri';
                  }
              ?></p>
              <b>Alamat</b> 
                  <?=  trim($s->alamat)?>

              <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                  <b>No Induk Kependudukan</b> <a class="pull-right"><?=$s->no_ktp?></a>
                </li>
                <li class="list-group-item">
                  <b>Tempat, Tanggal Lahir</b> <a class="pull-right"><?=$s->tempat_lahir.', '.$s->tempat_tgl_lahir?></a>
                </li>
                <li class="list-group-item">
                  <b>Kewarganegaran</b> <a class="pull-right"><?=$s->kewarganearaan?></a>
                </li>
                <li class="list-group-item">
                  <b>Pekerjaan</b> <a class="pull-right"><?=$s->pekerjaan?></a>
                </li>
                <li class="list-group-item">
                  <b>Agama</b> <a class="pull-right"><?=$s->agama?></a>
                </li>
              </ul>

              <a href="<?=  \yii\helpers\Url::toRoute(['data-catin/view', 'id' => $s->id])?>" class="btn btn-primary btn-block"><b>Detail</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
<?php } ?>

<?php 
foreach ($istri as $s) {
?>
<div class="col-md-6">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?=  Yii::getAlias('@web/upload/data-catin/'.$s->foto)?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?=$s->nama_lengkap?></h3>

              <p class="text-muted text-center"><?php
                  if ($s->status_data == \app\models\DataCatin::suami){
                      echo 'Suami';
                  }else{
                      echo'Istri';
                  }
              ?></p>
              <b>Alamat</b> 
                  <?=  trim($s->alamat)?>

              <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                  <b>No Induk Kependudukan</b> <a class="pull-right"><?=$s->no_ktp?></a>
                </li>
                <li class="list-group-item">
                  <b>Tempat, Tanggal Lahir</b> <a class="pull-right"><?=$s->tempat_lahir.', '.$s->tempat_tgl_lahir?></a>
                </li>
                <li class="list-group-item">
                  <b>Kewarganegaran</b> <a class="pull-right"><?=$s->kewarganearaan?></a>
                </li>
                <li class="list-group-item">
                  <b>Pekerjaan</b> <a class="pull-right"><?=$s->pekerjaan?></a>
                </li>
                <li class="list-group-item">
                  <b>Agama</b> <a class="pull-right"><?=$s->agama?></a>
                </li>
              </ul>

              <a href="<?=  \yii\helpers\Url::toRoute(['data-catin/view', 'id' => $s->id])?>" class="btn btn-primary btn-block"><b>Detail</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
<?php } ?>
</div>