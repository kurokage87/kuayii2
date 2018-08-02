<?php
use yii\bootstrap\Nav;
/* @var $this yii\web\View */
$this->title = 'Forum';

?>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Forum 
                <small>SMKN 5 Padang</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <?=  \yii\bootstrap\Html::a('new thread',['/post/create'],['class' => 'btn btn-success'])?>
             <div class="row">
                 
            <div class="col-lg-9">
				<?php				
				foreach($posts as $post){
					echo '<div>';
					echo '<h2>'.$post->judul.'</h2>';
					echo '<p>'.substr($post->isi,0,300).'...</p>';
					echo '<p><small>Posted by '.$post->profil->nama.' at '.date('F j, Y, g:i a',$post->create_time).'</small></p>';
					echo '<p><a class="btn btn-default" href="'.\Yii::$app->urlManager->createUrl(['site/forum-single', 'id' => $post->id]).'">readmore &raquo;</a></p>';
					echo '</div>';
				}
				?>                
            </div>
            <div class="col-lg-3">
                <h2>Category</h2>
				<?php				
				$items=[];	
				foreach($kategori as $category){
					$items[]=['label' => $category->nama_kategori , 'url' => \Yii::$app->urlManager->createUrl(['site/post-category', 'id' => $category->id])];
				}
				echo Nav::widget([
					'items' => $items,
				]);
				?>                
            </div>
        </div>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>