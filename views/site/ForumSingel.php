<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<section class="content">
    <div class="row">
        
        <!-- /.col -->
        <div class="col-md-12">
            <!-- Box Comment -->
            <div class="box box-widget">
                <div class="box-header with-border">
                    <div class="user-block">
                        <img class="img-circle" src="<?=  Yii::getAlias('@web/upload/profil/'.$post->profil->foto)?>" alt="User Image">
                        <span class="username"><a href="#"><?=  $post->profil->nama?></a></span>
                        <span class="description">Shared publicly - <?=  date('F j, Y, g:i a',$post->create_time)?></span>
                    </div>
                    <!-- /.user-block -->
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                            <i class="fa fa-circle-o"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- post text -->
                    <?=$post->isi?>

                    <!-- Attachment -->
                    <div class="attachment-block clearfix">
                        <img class="attachment-img" src="<?=  Yii::getAlias('@web/upload/defult-text.png')?>" alt="Attachment Image">
                        

                        <div class="attachment-pushed">
                            <h4 class="attachment-heading"><a href="<?=  Yii::getAlias('@web/upload/post/'.$post->file)?>">Download File PDF</a></h4>

                            <div class="attachment-text">
                                
                            </div>
                            <!-- /.attachment-text -->
                        </div>
                        <!-- /.attachment-pushed -->
                    </div>
                    <!-- /.attachment-block -->

                    <!-- Social sharing buttons -->
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                    <span class="pull-right text-muted">45 likes - 2 comments</span>
                </div>
                <!-- /.box-body -->
                <div class="box-footer box-comments">
                    <?php foreach ($comments as $comment) {?>
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="<?=  Yii::getAlias('@web/upload/profil/'.$comment->profil->foto)?>" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                                <?=$comment->profil->nama?>
                                <span class="text-muted pull-right"><?=date('F j, Y, g:i a',$comment->create_time)?></span>
                            </span><!-- /.username -->
                            <?=$comment->komentar?>
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <?php } ?>
                    <!-- /.box-comment -->
                    
                    <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                    <?=$this->render('formComment',[
                        'model' => $model,
                            'post' => $post
                    ])?>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
</div>