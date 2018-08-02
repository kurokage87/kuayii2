<?php

namespace app\models\searchModel;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailCatin;

/**
 * DetailCatinSearch represents the model behind the search form of `app\models\DetailCatin`.
 */
class DetailCatinSearch extends DetailCatin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'data_catin_id'], 'integer'],
            [['nama_istri_pertama', 'k_akta_nikah_pertama', 'no_akta_pertama', 'tgl_akta_pertama', 'nama_istri_kedua', 'k_akta_nikah_kedua', 'no_akta_kedua', 'tgl_akta_kedua', 'nama_istri_ketiga', 'k_akta_nikah_ketiga', 'no_akta_ketiga', 'tgl_akta_ketiga', 'izin_pengadilan', 'no_izin', 'tgl_izin', 'persetujuan_istri', 'tgl_persetujuan_istri'], 'safe'],
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
        $query = DetailCatin::find();

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
            'data_catin_id' => $this->data_catin_id,
        ]);

        $query->andFilterWhere(['like', 'nama_istri_pertama', $this->nama_istri_pertama])
            ->andFilterWhere(['like', 'k_akta_nikah_pertama', $this->k_akta_nikah_pertama])
            ->andFilterWhere(['like', 'no_akta_pertama', $this->no_akta_pertama])
            ->andFilterWhere(['like', 'tgl_akta_pertama', $this->tgl_akta_pertama])
            ->andFilterWhere(['like', 'nama_istri_kedua', $this->nama_istri_kedua])
            ->andFilterWhere(['like', 'k_akta_nikah_kedua', $this->k_akta_nikah_kedua])
            ->andFilterWhere(['like', 'no_akta_kedua', $this->no_akta_kedua])
            ->andFilterWhere(['like', 'tgl_akta_kedua', $this->tgl_akta_kedua])
            ->andFilterWhere(['like', 'nama_istri_ketiga', $this->nama_istri_ketiga])
            ->andFilterWhere(['like', 'k_akta_nikah_ketiga', $this->k_akta_nikah_ketiga])
            ->andFilterWhere(['like', 'no_akta_ketiga', $this->no_akta_ketiga])
            ->andFilterWhere(['like', 'tgl_akta_ketiga', $this->tgl_akta_ketiga])
            ->andFilterWhere(['like', 'izin_pengadilan', $this->izin_pengadilan])
            ->andFilterWhere(['like', 'no_izin', $this->no_izin])
            ->andFilterWhere(['like', 'tgl_izin', $this->tgl_izin])
            ->andFilterWhere(['like', 'persetujuan_istri', $this->persetujuan_istri])
            ->andFilterWhere(['like', 'tgl_persetujuan_istri', $this->tgl_persetujuan_istri]);

        return $dataProvider;
    }
}
