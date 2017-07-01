<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cnv_tipo_documento;

/**
 * Cnv_tipo_documentoSearch represents the model behind the search form about `app\models\Cnv_tipo_documento`.
 */
class Cnv_tipo_documentoSearch extends Cnv_tipo_documento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_TIPO_DOCUMENTO'], 'integer'],
            [['NOMBRE_TIPO_DOCUMENTO', 'DESCRIPCION', 'VIGENTE'], 'safe'],
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
        $query = Cnv_tipo_documento::find();

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
            'ID_TIPO_DOCUMENTO' => $this->ID_TIPO_DOCUMENTO,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE_TIPO_DOCUMENTO', $this->NOMBRE_TIPO_DOCUMENTO])
            ->andFilterWhere(['like', 'DESCRIPCION', $this->DESCRIPCION])
            ->andFilterWhere(['like', 'VIGENTE', $this->VIGENTE]);

        return $dataProvider;
    }
}
