<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvActividadConvenio;

/**
 * CnvActividadConvenioSearch represents the model behind the search form about `app\models\CnvActividadConvenio`.
 */
class CnvActividadConvenioSearch extends CnvActividadConvenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_ESTADO_ACTIVIDAD', 'ID_TIPO_ACTIVIDAD', 'ID_ACTIVIDAD_CONVENIO', 'ID_CONVENIO'], 'integer'],
            [['ID_RESPONSABLE_ACTIVIDAD', 'FECHA_INICIO', 'FECHA_FIN', 'NOMBRE_ACTIVIDAD', 'DESCRIPCION', 'VIGENTE'], 'safe'],
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
        $query = CnvActividadConvenio::find();

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
            'ID_ESTADO_ACTIVIDAD' => $this->ID_ESTADO_ACTIVIDAD,
            'ID_TIPO_ACTIVIDAD' => $this->ID_TIPO_ACTIVIDAD,
            'FECHA_INICIO' => $this->FECHA_INICIO,
            'FECHA_FIN' => $this->FECHA_FIN,
            'ID_ACTIVIDAD_CONVENIO' => $this->ID_ACTIVIDAD_CONVENIO,
            'ID_CONVENIO' => $this->ID_CONVENIO,
        ]);

        $query->andFilterWhere(['like', 'ID_RESPONSABLE_ACTIVIDAD', $this->ID_RESPONSABLE_ACTIVIDAD])
            ->andFilterWhere(['like', 'NOMBRE_ACTIVIDAD', $this->NOMBRE_ACTIVIDAD])
            ->andFilterWhere(['like', 'DESCRIPCION', $this->DESCRIPCION])
            ->andFilterWhere(['like', 'VIGENTE', $this->VIGENTE]);

        return $dataProvider;
    }
}
