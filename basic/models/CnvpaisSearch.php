<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cnvpais;

/**
 * CnvpaisSearch represents the model behind the search form about `app\models\Cnvpais`.
 */
class CnvpaisSearch extends Cnvpais
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PAIS'], 'integer'],
            [['NOMBRE_PAIS', 'CODIGO_PAIS', 'VIGENTE'], 'safe'],
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
        $query = Cnvpais::find();

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
            'ID_PAIS' => $this->ID_PAIS,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE_PAIS', $this->NOMBRE_PAIS])
            ->andFilterWhere(['like', 'CODIGO_PAIS', $this->CODIGO_PAIS])
            ->andFilterWhere(['like', 'VIGENTE', $this->VIGENTE]);

        return $dataProvider;
    }
}
