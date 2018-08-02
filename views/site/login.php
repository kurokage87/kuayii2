<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

    <h1>Login Form</h1>
    
    <?= $form->field($model, 'username',['template'=>"{input}\n{error}"])
        ->textInput(['autofocus' => true,'placeholder'=>'Username']) ?>

    <?= $form->field($model, 'password',['template'=>"{input}\n{error}"])
        ->passwordInput(['placeholder'=>'Password']) ?>
    
    <div>
      <?= Html::submitButton('Login', ['class' => 'btn btn-default submit', 'name' => 'login-button']) ?>
      <a class="reset_pass" href="#">Forgot Password</a>
      <a class="reset_pass" href="<?= yii\helpers\Url::toRoute('site/signup')?>">Signup</a>
    </div>
    
    <div class="clearfix"></div>

    <div class="separator">
    
      <br />

      <div>
        <!--<h1><i class="fa fa-paw"></i> Akatrust!</h1>-->
        <!--<p>©2016 All Rights Reserved. <a href="http://akatrust.com" target="_blank">Akatrust</a>!</p>-->
      </div>
    </div>

<?php ActiveForm::end(); ?>
