<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DetailCatin */

$this->title = 'Create Detail Catin';
$this->params['breadcrumbs'][] = ['label' => 'Detail Catins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-catin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
