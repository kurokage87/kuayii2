<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DataCatin */

$this->title = 'Create Data Catin';
$this->params['breadcrumbs'][] = ['label' => 'Data Catins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-catin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
