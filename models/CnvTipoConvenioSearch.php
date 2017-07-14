<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvTipoConvenio;

/**
 * CnvTipoConvenioSearch represents the model behind the search form about `app\models\CnvTipoConvenio`.
 */
class CnvTipoConvenioSearch extends CnvTipoConvenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipo_convenio'], 'integer'],
            [['nombre_tipo_convenio', 'nemonico', 'vigente'], 'safe'],
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
        $query = CnvTipoConvenio::find();

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
            'id_tipo_convenio' => $this->id_tipo_convenio,
        ]);

        $query->andFilterWhere(['like', 'nombre_tipo_convenio', $this->nombre_tipo_convenio])
            ->andFilterWhere(['like', 'nemonico', $this->nemonico])
            ->andFilterWhere(['like', 'vigente', $this->vigente]);

        return $dataProvider;
    }
}
