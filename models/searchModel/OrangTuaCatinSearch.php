<?php

namespace app\models\searchModel;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrangTuaCatin;

/**
 * OrangTuaCatinSearch represents the model behind the search form of `app\models\OrangTuaCatin`.
 */
class OrangTuaCatinSearch extends OrangTuaCatin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'data_catin_id', 'status_keluarga'], 'integer'],
            [['nama_lengkap', 'tempat_tgl_lahir', 'no_ktp', 'kewarganearaan', 'pekerjaan', 'agama', 'alamat', 'tempat_lahir'], 'safe'],
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
        $query = OrangTuaCatin::find();

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
            'status_keluarga' => $this->status_keluarga,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'tempat_tgl_lahir', $this->tempat_tgl_lahir])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'kewarganearaan', $this->kewarganearaan])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir]);

        return $dataProvider;
    }
}
