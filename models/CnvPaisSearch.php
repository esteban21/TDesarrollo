<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvPais;

/**
 * CnvPaisSearch represents the model behind the search form about `app\models\CnvPais`.
 */
class CnvPaisSearch extends CnvPais
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pais'], 'integer'],
            [['nombre_pais', 'codigo_pais', 'vigente'], 'safe'],
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
        $query = CnvPais::find();

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
            'id_pais' => $this->id_pais,
        ]);

        $query->andFilterWhere(['like', 'nombre_pais', $this->nombre_pais])
            ->andFilterWhere(['like', 'codigo_pais', $this->codigo_pais])
            ->andFilterWhere(['like', 'vigente', $this->vigente]);

        return $dataProvider;
    }
}
