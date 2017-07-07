<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvTipoActividad;

/**
 * CnvTipoActividadSearch represents the model behind the search form about `app\models\CnvTipoActividad`.
 */
class CnvTipoActividadSearch extends CnvTipoActividad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipo_actividad'], 'integer'],
            [['nombre_tipo_actividad', 'descripcion', 'vigente'], 'safe'],
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
        $query = CnvTipoActividad::find();

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
            'id_tipo_actividad' => $this->id_tipo_actividad,
        ]);

        $query->andFilterWhere(['like', 'nombre_tipo_actividad', $this->nombre_tipo_actividad])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'vigente', $this->vigente]);

        return $dataProvider;
    }
}
