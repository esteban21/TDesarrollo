<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvInstitucion;

/**
 * CnvInstitucionSearch represents the model behind the search form about `app\models\CnvInstitucion`.
 */
class CnvInstitucionSearch extends CnvInstitucion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_TIPO_INSTITUCION', 'ID_INSTITUCION', 'ID_PAIS'], 'integer'],
            [['NOMBRE_INSTITUCION', 'VIGENTE', 'ID_INTERNACIONAL', 'RUT_INSTITUCION', 'RAZON_SOCIAL_INSTITUCION', 'DIRECCION_INSTITUCION', 'TELEFONO_INSTITUCION', 'EMAIL_INSTITUCION', 'LINK_INSTITUCION'], 'safe'],
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
        $query = CnvInstitucion::find();

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
            'ID_TIPO_INSTITUCION' => $this->ID_TIPO_INSTITUCION,
            'ID_INSTITUCION' => $this->ID_INSTITUCION,
            'ID_PAIS' => $this->ID_PAIS,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE_INSTITUCION', $this->NOMBRE_INSTITUCION])
            ->andFilterWhere(['like', 'VIGENTE', $this->VIGENTE])
            ->andFilterWhere(['like', 'ID_INTERNACIONAL', $this->ID_INTERNACIONAL])
            ->andFilterWhere(['like', 'RUT_INSTITUCION', $this->RUT_INSTITUCION])
            ->andFilterWhere(['like', 'RAZON_SOCIAL_INSTITUCION', $this->RAZON_SOCIAL_INSTITUCION])
            ->andFilterWhere(['like', 'DIRECCION_INSTITUCION', $this->DIRECCION_INSTITUCION])
            ->andFilterWhere(['like', 'TELEFONO_INSTITUCION', $this->TELEFONO_INSTITUCION])
            ->andFilterWhere(['like', 'EMAIL_INSTITUCION', $this->EMAIL_INSTITUCION])
            ->andFilterWhere(['like', 'LINK_INSTITUCION', $this->LINK_INSTITUCION]);

        return $dataProvider;
    }
}
