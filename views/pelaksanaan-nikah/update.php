<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PelaksanaanNikah */

$this->title = 'Update Pelaksanaan Nikah: '.$model->user->username;
$this->params['breadcrumbs'][] = ['label' => 'Pelaksanaan Nikah', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pelaksanaan-nikah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
