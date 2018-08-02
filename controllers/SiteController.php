<?php

namespace app\controllers;

/* use Yii;
  use yii\filters\AccessControl;
  use yii\web\Controller;
  use yii\filters\VerbFilter;
  use app\models\LoginForm;
  use app\models\ContactForm; */

use Yii;
use app\models\LoginForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use app\models\SignupForm;
use app\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class SiteController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'index', 'daftar-user'],
                'rules' => [
                    [
                        'actions' => ['logout', 'index', 'daftar-user'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex() {
        return $this->render('index',[
            
        ]);
    }

    public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $pro = \app\models\Profil::findOne(['user_id' => \Yii::$app->user->identity->id]);
            if ($pro == NULL) {
                return $this->redirect(['/profil/create']);
            } else {
                return $this->goBack();
            }
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }
    
    public function actionPemeriksaanNikah(){
        
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    public function actionAbout() {
        return $this->render('about');
    }

    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

    public function actionGantiPassword() {
        $model = new \app\models\PasswordForm;
        $modeluser = \app\models\User::find()->where(['username' => \Yii::$app->user->identity->username])->one();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                try {
                    $modeluser->password = $_POST['PasswordForm']['newpass'];
                    if ($modeluser->save()) {
                        Yii::$app->getSession()->setFlash(
                                'Success', 'Password Diganti'
                        );
                        return $this->redirect(['index']);
                    } else {
                        Yii::$app->getSession()->setFlash(
                                'Error', 'Password Tidak Diganti'
                        );
                        return $this->redirect(['index']);
                    }
                } catch (Exception $ex) {
                    Yii::$app->getSession()->setFlash(
                            'error', "{$e->getMessage()}"
                    );
                }
                return $this->render('changepassword', [
                            'model' => $model
                ]);
            }
        } else {
            return $this->render('changepassword', [
                        'model' => $model
            ]);
        }
    }

    public function actionForum() {
        $posts = \app\models\Post::find()
                ->where(['status' => 1])
                ->orderBy('id DESC')
                ->all();

        $kategori = \app\models\Kategori::find()
                ->orderBy('nama_kategori ASC')
                ->all();

        return $this->render('forum', [
                    'posts' => $posts,
                    'kategori' => $kategori
        ]);
    }

    public function actionForumSingle($id) {
        $post = \app\models\Post::find()
                ->where(['status' => 1, 'id' => $id])
                ->one();

        $categories = \app\models\Kategori::find()
                ->orderBy('nama_kategori ASC')
                ->all();

        $model = new \app\models\Comment();
        
        $pro = \app\models\Profil::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
        if ($model->load(Yii::$app->request->post())) {
            $model->post_id = $id;
            $model->profil_id = $pro->id;
//            $model-> = 1;
            $model->create_time = time();

//            if (!Yii::$app->user->isGuest) {
//                $model->author = Yii::$app->user->identity->username;
//                $model->email = Yii::$app->user->identity->email;
//                $model->status = 1;
//            }

            if ($model->validate()) {
                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'Komentar Diterima');
                } else {
                    Yii::$app->session->setFlash('success', 'Komentar Gagal');
                }
            }
        }

        $comments = \app\models\Comment::find()
                ->where(['post_id' => $id])
                ->orderBy('id DESC')
                ->all();

        return $this->render('ForumSingel', [
                    'post' => $post,
                    'categories' => $categories,
                    'comments' => $comments,
                    'model' => $model,
        ]);
    }
    public function actionSendChat() {
        if (!empty($_POST)) {
            echo \sintret\chat\ChatRoom::sendChat($_POST);
        }
    }
    
    public function actionLiveChat()
    {
        return $this->render('live-chat');
    }
    
    public function actionTambahUser(){
        $model = new \app\models\UserMan();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($user = $model->inputan()){
                return $this->redirect(['daftar-user']);
            }
        }
        
        return $this->render('tambahUser',[
            'model' => $model
        ]);
    }
    
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect('daftar-user');
    }
    
    public function actionDaftarUser(){
        $searchModel = new \app\models\searchModel\ListUserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('list-user',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
        
    }


    protected function findModel($id)
    {
        if (($model = \app\models\ListUser::findOne($id)) !== NULL){
            return $model;
        }else{
            throw new \yii\web\NotFoundHttpException('Request Not Found');
        }
    }

}
