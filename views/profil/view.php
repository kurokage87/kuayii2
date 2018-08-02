<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profil */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-view">
    <div class="box box-primary">
        <div class="box-header with-border">

        </div>
        <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?= Yii::getAlias('@web/upload/profil/'.$model->foto)?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?=$model->nama?></h3>

              <ul class="list-group list-group-unbordered text-center   ">
                <li class="list-group-item">
                              <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Ganti Password', ['site/ganti-password', 'id' => $model->id], ['class' => 'btn btn-info']);?>
                </li>
                
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Detail Profil</a></li>

            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               <?php
                echo DetailView::widget([
                    'model' => $model,
                    'attributes' => [        
                        'user.username',
                        'user.email',
                        'nama',
                        'alamat:ntext',
                        'agama',
                        'no_telp',
                        'kec.nama_kec'
                        
                    ],
                ]);
               ?>
              </div>
              <!-- /.tab-pane -->
              

              <div class="tab-pane" id="settings">
                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    </div>
