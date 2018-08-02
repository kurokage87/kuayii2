<?php

namespace app\models\searchModel;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataCatin;

/**
 * DataCatinSearch represents the model behind the search form of `app\models\DataCatin`.
 */
class DataCatinSearch extends DataCatin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'status_data', 'status_perkawinan', 'pernikahan_ke'], 'integer'],
            [['nama_lengkap', 'tempat_tgl_lahir', 'no_ktp', 'kewarganearaan', 'pekerjaan', 'agama', 'alamat', 'foto', 'nasab_a', 'nasab_b', 'nasab_c', 'nama_pejabat_pemberi_izin', 'nomor_izin_pejabat', 'tgl_izin_surat', 'wna_instansi', 'wna_no_izin', 'wna_tgl_surat', 'izin_pengadilan_belum_umur', 'no_izin_pengadilan_belum_umur', 'tgl_izin_pengadilan_belum_umur', 'nama_pemeberi_izin', 'hubungan_keluarga', 'tgl_surat', 'tempat_lahir', 'nama_pasangan_sebelumnya', 'bukti_carai_instansi', 'bukti_cerai_no', 'tanggal_cerai'], 'safe'],
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
        $query = DataCatin::find();

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
            'status_data' => $this->status_data,
            'status_perkawinan' => $this->status_perkawinan,
            'pernikahan_ke' => $this->pernikahan_ke,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'tempat_tgl_lahir', $this->tempat_tgl_lahir])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'kewarganearaan', $this->kewarganearaan])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'nasab_a', $this->nasab_a])
            ->andFilterWhere(['like', 'nasab_b', $this->nasab_b])
            ->andFilterWhere(['like', 'nasab_c', $this->nasab_c])
            ->andFilterWhere(['like', 'nama_pejabat_pemberi_izin', $this->nama_pejabat_pemberi_izin])
            ->andFilterWhere(['like', 'nomor_izin_pejabat', $this->nomor_izin_pejabat])
            ->andFilterWhere(['like', 'tgl_izin_surat', $this->tgl_izin_surat])
            ->andFilterWhere(['like', 'wna_instansi', $this->wna_instansi])
            ->andFilterWhere(['like', 'wna_no_izin', $this->wna_no_izin])
            ->andFilterWhere(['like', 'wna_tgl_surat', $this->wna_tgl_surat])
            ->andFilterWhere(['like', 'izin_pengadilan_belum_umur', $this->izin_pengadilan_belum_umur])
            ->andFilterWhere(['like', 'no_izin_pengadilan_belum_umur', $this->no_izin_pengadilan_belum_umur])
            ->andFilterWhere(['like', 'tgl_izin_pengadilan_belum_umur', $this->tgl_izin_pengadilan_belum_umur])
            ->andFilterWhere(['like', 'nama_pemeberi_izin', $this->nama_pemeberi_izin])
            ->andFilterWhere(['like', 'hubungan_keluarga', $this->hubungan_keluarga])
            ->andFilterWhere(['like', 'tgl_surat', $this->tgl_surat])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'nama_pasangan_sebelumnya', $this->nama_pasangan_sebelumnya])
            ->andFilterWhere(['like', 'bukti_carai_instansi', $this->bukti_carai_instansi])
            ->andFilterWhere(['like', 'bukti_cerai_no', $this->bukti_cerai_no])
            ->andFilterWhere(['like', 'tanggal_cerai', $this->tanggal_cerai]);

        return $dataProvider;
    }
}
