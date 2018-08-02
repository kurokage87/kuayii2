<?php
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $form = ActiveForm::begin(); ?>
<!--<img class="img-responsive img-circle img-sm" src="<?=  Yii::getAlias('@web/upload/profil/'.$post->profil->foto)?>" alt="Alt Text">-->
    <?= $form->field($model, 'komentar')->textarea(['rows' => 3]) ?>
    <?php
    //$form->field($model, 'status')
    //$form->field($model, 'post_id')
    //$form->field($model, 'create_time') 
    ?>
<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>