<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_pais".
 *
 * @property integer $ID_PAIS
 * @property string $NOMBRE_PAIS
 * @property string $CODIGO_PAIS
 * @property string $VIGENTE
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
            [['ID_PAIS'], 'required'],
            [['ID_PAIS'], 'integer'],
            [['NOMBRE_PAIS'], 'string', 'max' => 200],
            [['CODIGO_PAIS'], 'string', 'max' => 10],
            [['VIGENTE'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_PAIS' => 'Id  Pais',
            'NOMBRE_PAIS' => 'Nombre  Pais',
            'CODIGO_PAIS' => 'Codigo  Pais',
            'VIGENTE' => 'Vigente',
        ];
    }
}
