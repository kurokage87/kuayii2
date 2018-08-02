<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\models;
/**
 * Description of PasswordForm
 *
 * @author Kurokage
 */

    use Yii;
    use yii\base\Model;
    use app\models\User;
    
class PasswordForm extends Model {
    
    public $oldpass;
    public $newpass;
    public $repeatnewpass;
    
    public function rules() {
        return [
            [['oldpass','newpass','repeatnewpass'], 'required'],
            ['oldpass', 'validatePassword'],
            ['repeatnewpass','compare','compareAttribute' => 'newpass'],
        ];
    }
    
    public function validatePassword($attribute, $params){
        $user = User::findByUsername(Yii::$app->user->identity->username);
        if (!$this->hasErrors()) {
            if (!$user || !$user->validatePassword($this->oldpass)) {
                $this->addError($attribute, 'Maaf Password Salah');
            }
        }
    }
    
    public function attributeLabels() {
        return [
            'oldpass' => 'Old Password',
            'newpass' => 'New Password',
            'repeatnewpass' => 'Repeat New Password'
        ];
    }
}
?>