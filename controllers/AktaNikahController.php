<?php

namespace app\controllers;

class AktaNikahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionCoverAkta(){
        $cover = \app\models\PelaksanaanNikah::find()->where(['user_id' => \Yii::$app->user->identity->id])->one();
        return $this->render('cover',[
            'cover' => $cover
        ]);
    }

}
