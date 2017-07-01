<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvCoordinadorConvenio;

/**
 * CnvCoordinadorConvenioSearch represents the model behind the search form about `app\models\CnvCoordinadorConvenio`.
 */
class CnvCoordinadorConvenioSearch extends CnvCoordinadorConvenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_coordinador_convenio', 'rut_coordinador_convenio', 'nombre_coordinador_convenio', 'fecha_inicio', 'fecha_fin', 'vigente', 'esexterno', 'unidad_academica', 'email'], 'safe'],
            [['dv_coordinador_convenio', 'id_institucion'], 'integer'],
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
        $query = CnvCoordinadorConvenio::find();

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
            'dv_coordinador_convenio' => $this->dv_coordinador_convenio,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'id_institucion' => $this->id_institucion,
        ]);

        $query->andFilterWhere(['like', 'id_coordinador_convenio', $this->id_coordinador_convenio])
            ->andFilterWhere(['like', 'rut_coordinador_convenio', $this->rut_coordinador_convenio])
            ->andFilterWhere(['like', 'nombre_coordinador_convenio', $this->nombre_coordinador_convenio])
            ->andFilterWhere(['like', 'vigente', $this->vigente])
            ->andFilterWhere(['like', 'esexterno', $this->esexterno])
            ->andFilterWhere(['like', 'unidad_academica', $this->unidad_academica])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
