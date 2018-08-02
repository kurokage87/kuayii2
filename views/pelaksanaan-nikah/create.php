<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PelaksanaanNikah */

$this->title = 'Create Pelaksanaan Nikah';
$this->params['breadcrumbs'][] = ['label' => 'Pelaksanaan Nikahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelaksanaan-nikah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
