<?php

namespace app\models\searchModel;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UploadBukti;

/**
 * UploadBuktiSearch represents the model behind the search form of `app\models\UploadBukti`.
 */
class UploadBuktiSearch extends UploadBukti
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pelaksanaan_nikah_id'], 'integer'],
            [['nama_rek', 'nama_bank', 'tanggal_kirim', 'foto'], 'safe'],
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
        $query = UploadBukti::find();

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
            'pelaksanaan_nikah_id' => $this->pelaksanaan_nikah_id,
            'tanggal_kirim' => $this->tanggal_kirim,
        ]);

        $query->andFilterWhere(['like', 'nama_rek', $this->nama_rek])
            ->andFilterWhere(['like', 'nama_bank', $this->nama_bank])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
