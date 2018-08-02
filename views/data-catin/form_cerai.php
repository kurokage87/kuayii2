<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\DataCatin */

$this->title = 'Form Status Cerai';
$this->params['breadcrumbs'][] = ['label' => 'Data Catins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-catin-create">
    
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="data-catin-form">
        <?php $form = ActiveForm::begin(); ?>
        
        <?= $form->field($model, 'nama_pasangan_sebelumnya')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'bukti_carai_instansi')->label('Bukti Cerai Dari Instansi')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'bukti_cerai')->fileInput() ?>

        <?= $form->field($model, 'tanggal_cerai')->widget(
            DatePicker::className(),[
                 'inline' => FALSE,
                'clientOptions' => [
                    'autoclose' => TRUE,
                    'format' => 'dd-M-yyyy',
                ]
            ]) ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>

</div>