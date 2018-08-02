<?php

namespace app\controllers;

use Yii;
use app\models\DetailCatin;
use app\models\searchModel\DetailCatinSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailCatinController implements the CRUD actions for DetailCatin model.
 */
class DetailCatinController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DetailCatin models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new DetailCatinSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailCatin model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {

        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DetailCatin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new DetailCatin();

        if ($model->load(Yii::$app->request->post())) {
            $model->akta1 = \yii\web\UploadedFile::getInstance($model, 'akta1');
            $model->akta2 = \yii\web\UploadedFile::getInstance($model, 'akta2');
            $model->akta3 = \yii\web\UploadedFile::getInstance($model, 'akta3');
            $model->scan_izin_istri = \yii\web\UploadedFile::getInstance($model, 'scan_izin_istri');
            $model->scan_izin_p = \yii\web\UploadedFile::getInstance($model, 'scan_izin_p');
            if ($model->upload()) {
                $model->akta1 == null ? "" : $model->no_akta_pertama = $model->akta1->name;
                $model->akta2 == null ? "" : $model->no_akta_kedua = $model->akta2->name;
                $model->akta3 == null ? "" : $model->no_akta_pertama = $model->akta3->name;
                $model->scan_izin_istri == null ? "" : $model->persetujuan_istri = $model->scan_izin_istri->name;
                $model->scan_izin_p == null ? "" : $model->no_izin = $model->scan_izin_p->name;
                $model->save(FALSE);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetailCatin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->akta1 = \yii\web\UploadedFile::getInstance($model, 'akta1');
            $model->akta2 = \yii\web\UploadedFile::getInstance($model, 'akta2');
            $model->akta3 = \yii\web\UploadedFile::getInstance($model, 'akta3');
            $model->scan_izin_istri = \yii\web\UploadedFile::getInstance($model, 'scan_izin_istri');
            $model->scan_izin_p = \yii\web\UploadedFile::getInstance($model, 'scan_izin_p');
            if ($model->upload()) {
                $model->akta1 == null ? "" : $model->no_akta_pertama = $model->akta1->name;
                $model->akta2 == null ? "" : $model->no_akta_kedua = $model->akta2->name;
                $model->akta3 == null ? "" : $model->no_akta_pertama = $model->akta3->name;
                $model->scan_izin_istri == null ? "" : $model->persetujuan_istri = $model->scan_izin_istri->name;
                $model->scan_izin_p == null ? "" : $model->no_izin = $model->scan_izin_p->name;
                $model->save(FALSE);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailCatin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailCatin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DetailCatin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = DetailCatin::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
