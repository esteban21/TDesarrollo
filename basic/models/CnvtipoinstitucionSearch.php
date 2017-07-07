<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvTipoInstitucion;

/**
 * CnvtipoinstitucionSearch represents the model behind the search form about `app\models\CnvTipoInstitucion`.
 */
class CnvtipoinstitucionSearch extends CnvTipoInstitucion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion', 'vigente'], 'safe'],
            [['id_tipo_institucion'], 'integer'],
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
        $query = CnvTipoInstitucion::find();

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
            'id_tipo_institucion' => $this->id_tipo_institucion,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'vigente', $this->vigente]);

        return $dataProvider;
    }
}
