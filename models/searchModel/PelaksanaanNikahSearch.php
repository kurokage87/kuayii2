<?php

namespace app\models\searchModel;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PelaksanaanNikah;

/**
 * PelaksanaanNikahSearch represents the model behind the search form of `app\models\PelaksanaanNikah`.
 */
class PelaksanaanNikahSearch extends PelaksanaanNikah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'kec_id', 'status_nikah', 'id_suami', 'id_istri'], 'integer'],
            [['hari_nikah', 'tgl_nikah', 'waktu', 'tempat', 'tgl_daftar', 'kota', 'mas_kawin', 'pembayaran', 'no_perjanjian_kawin', 'tgl_surat_perjanjian', 'nama_notaris', 'note_kelengkapan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $ctrl = Yii::$app->controller->action->id;
        $pro = \app\models\Profil::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
        
        if ($ctrl == 'halaman-pegawai-desa'){
            $query = PelaksanaanNikah::find()->where(['status_nikah' => PelaksanaanNikah::daftar_catin])->andWhere(['kec_id' => $pro->kec_id]);
        }elseif ($ctrl == 'halaman-kepala-desa') {
            $query = PelaksanaanNikah::find()->where(['status_nikah' => PelaksanaanNikah::lengkap_pegdes])->andWhere(['kec_id' => $pro->kec_id]);
        }elseif ($ctrl == 'halaman-pegawai-kua') {
            $query = PelaksanaanNikah::find()->where(['status_nikah' => PelaksanaanNikah::disetujui_kepala_desa])->andWhere(['kec_id' => $pro->kec_id]);
        }elseif ($ctrl == 'periksa-pegawai-kua') {
            $query = PelaksanaanNikah::find()->where(['status_nikah' => PelaksanaanNikah::diperiksa_pegawai_kua]);
        }elseif ($ctrl == 'halaman-kepala-kua') {
            $query = PelaksanaanNikah::find()->where(['status_nikah' => PelaksanaanNikah::lengkap_pegkua]);
        }elseif ($ctrl == 'periksa-pegawai-desa') {
            $query = PelaksanaanNikah::find()->where(['status_nikah' => PelaksanaanNikah::diperiksa_pegawai_desa])->andWhere(['kec_id' => $pro->kec_id]);
        }elseif ($ctrl == 'daftar-lengkapi') {
            $query = PelaksanaanNikah::find()->where(['status_nikah' => PelaksanaanNikah::lengkapi_kembali]);
        }elseif ($ctrl == 'selesai') {
            $query = PelaksanaanNikah::find()->where(['status_nikah' => PelaksanaanNikah::disetujui_kepala_kua])->andWhere(['kec_id' => $pro->kec_id]);
        }elseif ($ctrl == 'proses') {
            $query = PelaksanaanNikah::find()->where(['kec_id' => $pro->kec_id]);
        }else{
            $query = PelaksanaanNikah::find();
        }

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'kec_id' => $this->kec_id,
            'status_nikah' => $this->status_nikah,
            'id_suami' => $this->id_suami,
            'id_istri' => $this->id_istri,
        ]);

        $query->andFilterWhere(['like', 'hari_nikah', $this->hari_nikah])
            ->andFilterWhere(['like', 'tgl_nikah', $this->tgl_nikah])
            ->andFilterWhere(['like', 'waktu', $this->waktu])
            ->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'tgl_daftar', $this->tgl_daftar])
            ->andFilterWhere(['like', 'kota', $this->kota])
            ->andFilterWhere(['like', 'mas_kawin', $this->mas_kawin])
            ->andFilterWhere(['like', 'pembayaran', $this->pembayaran])
            ->andFilterWhere(['like', 'no_perjanjian_kawin', $this->no_perjanjian_kawin])
            ->andFilterWhere(['like', 'tgl_surat_perjanjian', $this->tgl_surat_perjanjian])
            ->andFilterWhere(['like', 'nama_notaris', $this->nama_notaris])
            ->andFilterWhere(['like', 'note_kelengkapan', $this->note_kelengkapan]);

        return $dataProvider;
    }
}
