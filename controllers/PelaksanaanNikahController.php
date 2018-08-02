<?php

namespace app\controllers;

use Yii;
use app\models\PelaksanaanNikah;
use app\models\searchModel\PelaksanaanNikahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

/**
 * PelaksanaanNikahController implements the CRUD actions for PelaksanaanNikah model.
 */
class PelaksanaanNikahController extends Controller
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
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
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
     * Lists all PelaksanaanNikah models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PelaksanaanNikahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionPeriksaPegawaiDesa(){
        $searchModel = new PelaksanaanNikahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionPeriksaPegawaiKua(){
        $searchModel = new PelaksanaanNikahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionDaftarLengkapi(){
        $searchModel = new PelaksanaanNikahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionHalamanPegawaiDesa()
    {
        $searchModel = new PelaksanaanNikahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionHalamanKepalaDesa(){
        $searchModel = new PelaksanaanNikahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionHalamanPegawaiKua(){
        $searchModel = new PelaksanaanNikahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionHalamanKepalaKua(){
        $searchModel = new PelaksanaanNikahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionSelesai(){
        $searchModel = new PelaksanaanNikahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionProses(){
        $searchModel = new PelaksanaanNikahSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);
        
        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }


    /**
     * Displays a single PelaksanaanNikah model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    
    public function actionDataCatin(){
        $model = new PelaksanaanNikah();
        $calonSuami = \app\models\DataCatin::find()->where(['user_id' => \Yii::$app->user->identity->id])->andWhere(['status_data' => \app\models\DataCatin::suami])->one();
        $calonIstri = \app\models\DataCatin::find()->where(['user_id' => \Yii::$app->user->identity->id])->andWhere(['status_data' => \app\models\DataCatin::istri])->one();
        $calonSuami == null ? "" :$model->id_suami = $calonSuami->id;
        $calonIstri == NULL ? "" : $model->id_istri = $calonIstri->id;
        $model->status_nikah = PelaksanaanNikah::daftar_catin;
        $model->user_id = Yii::$app->user->identity->id;
        $pro = \app\models\Profil::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
//        \yii\helpers\VarDumper::dump($pro);die;
        $model->kec_id = $pro->kec_id;
        $model->save();
        return $this->redirect(['data-catin/catin']);
    }
    
    public function actionView($id)
    {
    
        return $this->render('view', [
            'model' => $this->findModel($id),
         ]);
    }

    /**
     * Creates a new PelaksanaanNikah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionPilihan($id)
    {
        $model = $this->findModel($id);
        
        if ($model->load(\Yii::$app->request->post()) && $model->save()){          
            if ($model->pilihan_lokasi == PelaksanaanNikah::nikah_kua){
                return $this->redirect(['view', 'id' => $model->id]);
            }elseif ($model->pilihan_lokasi == PelaksanaanNikah::nikah_dirumah) {
                return $this->redirect(['form-nikah', 'id' => $model->id]);
            }
        }
        
        return $this->render('form-pilihan',[
            'model' => $model
        ]);
    }
    
    public function actionFormNikah($id){
        $model = $this->findModel($id);
        $calonSuami = \app\models\DataCatin::find()->where(['user_id' => \Yii::$app->user->identity->id])->andWhere(['status_data' => \app\models\DataCatin::suami])->one();
        $calonIstri = \app\models\DataCatin::find()->where(['user_id' => \Yii::$app->user->identity->id])->andWhere(['status_data' => \app\models\DataCatin::istri])->one();
        $calonSuami == null ? "" :$model->id_suami = $calonSuami->id;
        $calonIstri == NULL ? "" : $model->id_istri = $calonIstri->id;
        
        if ($model->load(\Yii::$app->request->post())){
            
        }
    }
    
    public function actionCreate()
    {
        $model = new PelaksanaanNikah();
        $model->user_id = \Yii::$app->user->identity->id;
        $model->tgl_daftar = date('d F Y');
        $model->status_nikah = PelaksanaanNikah::daftar_nikah;
        
        $calonSuami = \app\models\DataCatin::find()->where(['user_id' => \Yii::$app->user->identity->id])->andWhere(['status_data' => \app\models\DataCatin::suami])->one();
        $calonIstri = \app\models\DataCatin::find()->where(['user_id' => \Yii::$app->user->identity->id])->andWhere(['status_data' => \app\models\DataCatin::istri])->one();
        $calonSuami == null ? "" :$model->id_suami = $calonSuami->id;
        $calonIstri == NULL ? "" : $model->id_istri = $calonIstri->id;
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    public function actionUpdatePegawaiDesa($id){
        $model = $this->findModel($id);
        $model->status_nikah = PelaksanaanNikah::diperiksa_pegawai_desa;
        $model->save();

        return $this->redirect(['view', 'id' => $model->id]);
    }
    
    public function actionApprovePegawaiDesa($id){
        $model = $this->findModel($id);
        $model->status_nikah = PelaksanaanNikah::lengkap_pegdes;
        $model->save();
        
        return $this->redirect(['view', 'id' => $model->id]);
    }

    public function actionDataLengkapi($id){
        $model = $this->findModel($id);
        $model->status_nikah = PelaksanaanNikah::lengkapi_kembali;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('pesan_kelengkapan', [
            'model' => $model,
        ]);
    }

    public function actionUpdateKepalaDesa($id){
        $model = $this->findModel($id);
        $model->status_nikah = PelaksanaanNikah::disetujui_kepala_desa;
        $model->save();
        
        return $this->redirect(['view', 'id' => $model->id]);
    }

    public function actionUpdatePegawaiKua($id){
        $model = $this->findModel($id);
        $model->status_nikah = PelaksanaanNikah::diperiksa_pegawai_kua;
        $model->save();
        
        return $this->redirect(['view', 'id' => $model->id]);
    }
    
    public function actionApprovePegawaiKua($id){
        $model = $this->findModel($id);
        $model->status_nikah = PelaksanaanNikah::lengkap_pegkua;
        $model->save();
        
        return $this->redirect(['view', 'id' => $model->id]);
    }

    public function actionUpdateKepalaKua($id){
        $model = $this->findModel($id);
        $model->status_nikah = PelaksanaanNikah::disetujui_kepala_kua;
        $model->save();
        
        return $this->redirect(['view', 'id' => $model->id]);
    }

    public function actionPenghulu($id){
        $model = $this->findModel($id);
        $model->penguhulu_id = \Yii::$app->user->identity->id;
        $model->save();
        return $this->redirect(['view', 'id' => $model->id]);
    }

    public function actionTanggalNikah()
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    
    public function actionCetakPernyataanSuami($id)
    {
        $content = $this->renderPartial('surat_pernyataan',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
        'mode' => Pdf::MODE_BLANK,
        'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>[''], 
            'SetFooter'=>[''],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakPernyataanIstri($id)
    {
        $content = $this->renderPartial('surat_pernyataan',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
        'mode' => Pdf::MODE_BLANK,
        'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>[''], 
            'SetFooter'=>[''],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakIzinOrangTuaSuami($id)
    {
        $content = $this->renderPartial('surat_izin_orangtua',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
        'mode' => Pdf::MODE_BLANK,
        'format' => Pdf::FORMAT_LEGAL, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>[''], 
            'SetFooter'=>[''],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakIzinOrangTuaIstri($id)
    {
        $content = $this->renderPartial('surat_izin_orangtua',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
        'mode' => Pdf::MODE_BLANK,
        'format' => Pdf::FORMAT_LEGAL, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>[''], 
            'SetFooter'=>[''],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakAktaNikah($id){
        $content = $this->renderPartial('printakta',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Cover Akta Nikah'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakBerkasModelN1Suami($id){
        $content = $this->renderPartial('berkas_model_n_1',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['<b>Model N-1</b>'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakBerkasModelN1Istri($id){
        $content = $this->renderPartial('berkas_model_n_1',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['<b>Model N-1</b>'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    public function actionCetakBerkasModelN2Suami($id){
        $content = $this->renderPartial('berkas_model_n_2',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['<p>Lampiran 8 KMA No. 477 Tahun 2004</p>'
                . '<p>Pasal 7 ayat (2) huruf b</p>'
                . '<p><b>Model N-2</b></p>'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    public function actionCetakBerkasModelN2Istri($id){
        $content = $this->renderPartial('berkas_model_n_2',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['<p>Lampiran 8 KMA No. 477 Tahun 2004</p>'
                . '<p>Pasal 7 ayat (2) huruf b</p>'
                . '<p><b>Model N-2</b></p>'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakBerkasModelN3Suami($id){
        $content = $this->renderPartial('berkas_model_n_3',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Lampiran 9 PMA No.2 Tahun 1990'
                . '<p>Pasal 8 ayat (1) huruf b</p>'
                . '<b>Model N-3</b>'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakBerkasModelN3Istri($id){
        $content = $this->renderPartial('berkas_model_n_3',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Lampiran 9 PMA No.2 Tahun 1990'
                . '<p>Pasal 8 ayat (1) huruf b</p>'
                . '<b>Model N-3</b>'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakBerkasModelN4Suami($id){
        $content = $this->renderPartial('berkas_model_n_4',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Model N-4'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakBerkasModelN4Istri($id){
        $content = $this->renderPartial('berkas_model_n_4',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Model N-4'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakBerkasModelN5Suami($id){
        $content = $this->renderPartial('berkas_model_n_5',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_FOLIO, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Lampiran II KMA No.477 Tahun 2004'
                . '<p>Pasal 7 ayat (2) huruf e</p>'
                . '<b>Model N-5</b>'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakBerkasModelN5Istri($id){
        $content = $this->renderPartial('berkas_model_n_5',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_LEGAL, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Lampiran II KMA No.477 Tahun 2004'
                . '<p>Pasal 7 ayat (2) huruf e</p>'
                . '<b>Model N-5</b>'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionCetakAktaNikahIsi($id){
        
        $orangTuaCatin = \app\models\DataCatin::find()->joinWith('OrangTuaCatin');
        
        $content = $this->renderPartial('printaktaisi',[
            'model' => $this->findModel($id),
        ]);
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_BLANK,
            'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Bukti Pembayaran'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Isi Akta Nikah'], 
            'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }

    /**
     * Updates an existing PelaksanaanNikah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionTotalPerdesa(){
        $count = (new \yii\db\Query)
                ->select('COUNT(pelaksanaan_nikah.kec_id) as jumlah, kecamatan.nama_kec')
                ->from('pelaksanaan_nikah')
                ->innerJoin('kecamatan', 'pelaksanaan_nikah.kec_id=kecamatan.id' )
                ->groupBy('kec_id')
                ->all();
        
        return $this->render('count_desa',[
            'model' => $count
        ]);
    }
    
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
         $model->status_nikah = PelaksanaanNikah::daftar_nikah;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->status_nikah = PelaksanaanNikah::daftar_nikah;
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PelaksanaanNikah model.
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
     * Finds the PelaksanaanNikah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PelaksanaanNikah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PelaksanaanNikah::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
