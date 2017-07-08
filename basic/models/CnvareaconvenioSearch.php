<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvAreaConvenio;

/**
 * CnvareaconvenioSearch represents the model behind the search form about `app\models\CnvAreaConvenio`.
 */
class CnvareaconvenioSearch extends CnvAreaConvenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_area_convenio'], 'integer'],
            [['nombre_area_convenio', 'descripcion', 'vigente'], 'safe'],
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
        $query = CnvAreaConvenio::find();

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
            'id_area_convenio' => $this->id_area_convenio,
        ]);

        $query->andFilterWhere(['like', 'nombre_area_convenio', $this->nombre_area_convenio])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'vigente', $this->vigente]);

        return $dataProvider;
    }
}
