<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvEstadoActividad;

/**
 * CnvEstadoActividadSearch represents the model behind the search form about `app\models\CnvEstadoActividad`.
 */
class CnvEstadoActividadSearch extends CnvEstadoActividad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_estado_actividad'], 'integer'],
            [['nombre_estado', 'descripcion', 'vigente'], 'safe'],
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
        $query = CnvEstadoActividad::find();

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
            'id_estado_actividad' => $this->id_estado_actividad,
        ]);

        $query->andFilterWhere(['like', 'nombre_estado', $this->nombre_estado])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'vigente', $this->vigente]);

        return $dataProvider;
    }
}
