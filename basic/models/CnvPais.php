<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_pais".
 *
 * @property integer $id_pais
 * @property string $nombre_pais
 * @property string $codigo_pais
 * @property string $vigente
 *
 * @property CnvInstitucion[] $cnvInstitucions
 */
class CnvPais extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_pais';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pais'], 'required'],
            [['id_pais'], 'integer'],
            [['nombre_pais'], 'string', 'max' => 200],
            [['codigo_pais'], 'string', 'max' => 10],
            [['vigente'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pais' => 'Id Pais',
            'nombre_pais' => 'Nombre Pais',
            'codigo_pais' => 'Codigo Pais',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvInstitucions()
    {
        return $this->hasMany(CnvInstitucion::className(), ['id_pais' => 'id_pais']);
    }

    
}
