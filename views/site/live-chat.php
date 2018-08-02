<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php 
$pro = app\models\Profil::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
echo \sintret\chat\ChatRoom::widget([
            'url' => \yii\helpers\Url::to(['/site/send-chat']),
            'userModel'=>  \app\models\User::className(),
            'userField' => 'avatarImage'
                ]); ?>
