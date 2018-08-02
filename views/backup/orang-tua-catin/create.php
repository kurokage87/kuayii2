<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrangTuaCatin */

$this->title = 'Create Orang Tua Catin';
$this->params['breadcrumbs'][] = ['label' => 'Orang Tua Catins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orang-tua-catin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
