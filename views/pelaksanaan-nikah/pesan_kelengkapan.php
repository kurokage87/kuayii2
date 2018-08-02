<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\PelaksanaanNikah */
/* @var $form ActiveForm */
$this->title = 'Pesan';
$this->params['breadcrumbs'][] = ['label' => 'Pelaksanaan Nikahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelaksanaan-nikah-pesan_kelengkapan">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'note_kelengkapan')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    'language' => 'id',
    'clientOptions' => [
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ]
    ]) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- pelaksanaan-nikah-pesan_kelengkapan -->
