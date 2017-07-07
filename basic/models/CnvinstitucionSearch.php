<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CnvInstitucion;

/**
 * CnvinstitucionSearch represents the model behind the search form about `app\models\CnvInstitucion`.
 */
class CnvinstitucionSearch extends CnvInstitucion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_institucion', 'vigente', 'rut_institucion', 'razon_social_institucion', 'direccion_institucion', 'telefono_institucion', 'email_institucion', 'link_institucion'], 'safe'],
            [['id_institucion', 'id_pais', 'id_tipo_institucion'], 'integer'],
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
            'id_institucion' => $this->id_institucion,
            'id_pais' => $this->id_pais,
            'id_tipo_institucion' => $this->id_tipo_institucion,
        ]);

        $query->andFilterWhere(['like', 'nombre_institucion', $this->nombre_institucion])
            ->andFilterWhere(['like', 'vigente', $this->vigente])
            ->andFilterWhere(['like', 'rut_institucion', $this->rut_institucion])
            ->andFilterWhere(['like', 'razon_social_institucion', $this->razon_social_institucion])
            ->andFilterWhere(['like', 'direccion_institucion', $this->direccion_institucion])
            ->andFilterWhere(['like', 'telefono_institucion', $this->telefono_institucion])
            ->andFilterWhere(['like', 'email_institucion', $this->email_institucion])
            ->andFilterWhere(['like', 'link_institucion', $this->link_institucion]);

        return $dataProvider;
    }
}
