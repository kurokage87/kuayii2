<?php

namespace app\controllers;

use Yii;
use app\models\DataCatin;
use app\models\searchModel\DataCatinSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataCatinController implements the CRUD actions for DataCatin model.
 */
class DataCatinController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
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
     * Lists all DataCatin models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataCatinSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataCatin model.
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
     * Creates a new DataCatin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DataCatin();

        if ($model->load(Yii::$app->request->post())) {
            //instansiasi untuk upload file
            $model->image = \yii\web\UploadedFile::getInstance($model, 'image');
            $model->izin_belum_umur = \yii\web\UploadedFile::getInstance($model, 'izin_belum_umur');
            $model->izin_pejabat = \yii\web\UploadedFile::getInstance($model, 'izin_pejabat');
            $model->izin_wna = \yii\web\UploadedFile::getInstance($model, 'izin_wna');
            $model->kk = \yii\web\UploadedFile::getInstance($model, 'kk');
            $model->ktp = \yii\web\UploadedFile::getInstance($model, 'ktp');
            
            //aksi untuk record ke db
            if ($model->upload()){
                $model->image == null ? "" : $model->foto = $model->image->name;
                $model->kk == null ? "" : $model->file_kk = $model->kk->name;
                $model->ktp == null ? "" : $model->file_ktp = $model->ktp->name;
                $model->izin_belum_umur == null ? "" : $model->no_izin_pengadilan_belum_umur = $model->izin_belum_umur->name;
                $model->izin_pejabat == null ? "" : $model->nomor_izin_pejabat = $model->izin_pejabat->name;
                $model->izin_wna == null ? "" : $model->wna_no_izin = $model->izin_wna->name;
                        
                $model->user_id = Yii::$app->user->identity->id;
                $model->save(FALSE);
            }
            //kondisi status
            if($model->status_perkawinan == DataCatin::perjaka){
                return $this->redirect(['view', 'id' => $model->id]);
            }elseif ($model->status_perkawinan == DataCatin::perawan) {
                return $this->redirect(['view', 'id' => $model->id]);
            }elseif ($model->status_perkawinan == DataCatin::duda) {
                return $this->redirect(['cerai', 'id' => $model->id]);
            }elseif ($model->status_perkawinan == DataCatin::janda) {
                return $this->redirect(['cerai', 'id' => $model->id]);
            }elseif ($model->status_perkawinan == DataCatin::beristri) {
                return $this->redirect(['detail-catin/create']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    public function actionCerai($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->bukti_cerai = \yii\web\UploadedFile::getInstance($model, 'bukti_cerai');
            if ($model->upload()){
                $model->bukti_cerai == null ? "" : $model->bukti_cerai_no = $model->bukti_cerai->name;
                $model->save(false);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('form_cerai', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataCatin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->image = \yii\web\UploadedFile::getInstance($model, 'image');
            $model->izin_belum_umur = \yii\web\UploadedFile::getInstance($model, 'izin_belum_umur');
            $model->izin_pejabat = \yii\web\UploadedFile::getInstance($model, 'izin_pejabat');
            $model->izin_wna = \yii\web\UploadedFile::getInstance($model, 'izin_wna');
            $model->kk = \yii\web\UploadedFile::getInstance($model, 'kk');
            $model->ktp = \yii\web\UploadedFile::getInstance($model, 'ktp');
            
            if($model->upload())
            {
                $model->image == null ? "" : $model->foto = $model->image->name;
                $model->kk == null ? "" : $model->file_kk = $model->kk->name;
                $model->ktp == null ? "" : $model->file_ktp = $model->ktp->name;
                $model->izin_belum_umur == null ? "" : $model->no_izin_pengadilan_belum_umur = $model->izin_belum_umur->name;
                $model->izin_pejabat == null ? "" : $model->nomor_izin_pejabat = $model->izin_pejabat->name;
                $model->izin_wna == null ? "" : $model->wna_no_izin = $model->izin_wna->name;
                $model->save(false);
            }
            if($model->status_perkawinan == DataCatin::perjaka){
                return $this->redirect(['view', 'id' => $model->id]);
            }elseif ($model->status_perkawinan == DataCatin::perawan) {
                return $this->redirect(['view', 'id' => $model->id]);
            }elseif ($model->status_perkawinan == DataCatin::duda) {
                return $this->redirect(['cerai', 'id' => $model->id]);
            }elseif ($model->status_perkawinan == DataCatin::janda) {
                return $this->redirect(['cerai', 'id' => $model->id]);
            }elseif ($model->status_perkawinan == DataCatin::beristri) {
                return $this->redirect(['detail-catin/create']);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    
    public function actionCatin()
    {
        $suami = DataCatin::find()->where(['user_id' => Yii::$app->user->identity->id])->andWhere(['status_data' => DataCatin::suami])->limit(1)->orderBy('id desc')->all();
        $istri = DataCatin::find()->where(['user_id' => Yii::$app->user->identity->id])->andWhere(['status_data' => DataCatin::istri])->limit(1)->orderBy('id desc')->all();
        return $this->render('catin',[
            'suami' => $suami,
            'istri' => $istri
        ]);
    }

    /**
     * Deletes an existing DataCatin model.
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
     * Finds the DataCatin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DataCatin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DataCatin::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
