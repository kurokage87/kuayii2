<?php

namespace app\controllers;

use Yii;
use app\models\OrangTuaCatin;
use app\models\searchModel\OrangTuaCatinSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrangTuaCatinController implements the CRUD actions for OrangTuaCatin model.
 */
class OrangTuaCatinController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => TRUE,
                        'roles' => ['@'],
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all OrangTuaCatin models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrangTuaCatinSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrangTuaCatin model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new OrangTuaCatin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCetakIzinOrangTua($id){
        return $this->render('surat_izin_orangtua',[
            'model' => $this->findModel($id),
        ]);
    }
    
    public function actionCreate()
    {
        $model = new OrangTuaCatin();
        
        if ($model->load(Yii::$app->request->post())) {
            $model->kk = \yii\web\UploadedFile::getInstance($model, 'kk');
            $model->ktp = \yii\web\UploadedFile::getInstance($model, 'ktp');
            
            if ($model->upload())
            {
                $model->kk == null ? "" : $model->file_kk = $model->kk->name;
                $model->ktp == null ? "" : $model->file_ktp = $model->ktp->name;
                $model->save(false);
            }
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OrangTuaCatin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->kk = \yii\web\UploadedFile::getInstance($model, 'kk');
            $model->ktp = \yii\web\UploadedFile::getInstance($model, 'ktp');
            
            if ($model->upload())
            {
                $model->kk == null ? "" : $model->file_kk = $model->kk->name;
                $model->ktp == null ? "" : $model->file_ktp = $model->ktp->name;
                $model->save(false);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OrangTuaCatin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrangTuaCatin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OrangTuaCatin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OrangTuaCatin::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
