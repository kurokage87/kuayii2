<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UploadBukti */

$this->title = Yii::t('app', 'Create Upload Bukti');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Upload Buktis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upload-bukti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
