<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = "Pilih Metode NIkah";
?>

<div class="pelaksanaan-nikah-form">
    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'pilihan_lokasi')->dropDownList([
        'prompt' => 'Silahkan Pilih',
    \app\models\PelaksanaanNikah::nikah_dirumah => 'Nikah Di Rumah',
    \app\models\PelaksanaanNikah::nikah_kua => 'Nikah Di KUA'
    ])?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    
    <?php ActiveForm::end(); ?>
</div>