<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_objetivo_convenio".
 *
 * @property integer $id_objetivo_convenio
 * @property string $texto_objetivo
 * @property string $vigente
 *
 * @property CnvConvenio[] $cnvConvenios
 */
class CnvObjetivoConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_objetivo_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_objetivo_convenio'], 'required'],
            [['id_objetivo_convenio'], 'integer'],
            [['texto_objetivo'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_objetivo_convenio' => 'Id Objetivo Convenio',
            'texto_objetivo' => 'Texto Objetivo',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvConvenios()
    {
        return $this->hasMany(CnvConvenio::className(), ['id_objetivo_convenio' => 'id_objetivo_convenio']);
    }
}
