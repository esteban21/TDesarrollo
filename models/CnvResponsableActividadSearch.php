<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvResponsableActividad;

/**
 * CnvResponsableActividadSearch represents the model behind the search form about `app\models\CnvResponsableActividad`.
 */
class CnvResponsableActividadSearch extends CnvResponsableActividad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_responsable_actividad', 'nombre_responsable', 'vigente'], 'safe'],
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
        $query = CnvResponsableActividad::find();

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
        $query->andFilterWhere(['like', 'id_responsable_actividad', $this->id_responsable_actividad])
            ->andFilterWhere(['like', 'nombre_responsable', $this->nombre_responsable])
            ->andFilterWhere(['like', 'vigente', $this->vigente]);

        return $dataProvider;
    }
}
