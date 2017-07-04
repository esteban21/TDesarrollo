<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_modalidad_colaboracion".
 *
 * @property integer $ID_MODALIDAD_COLABORACION
 * @property string $NOMBRE_MODALIDAD_COLABORACION
 * @property string $DESCRIPCION
 * @property string $VIGENTE
 */
class CnvModalidadColaboracion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_modalidad_colaboracion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_MODALIDAD_COLABORACION'], 'required'],
            [['ID_MODALIDAD_COLABORACION'], 'integer'],
            [['NOMBRE_MODALIDAD_COLABORACION'], 'string', 'max' => 200],
            [['DESCRIPCION'], 'string', 'max' => 500],
            [['VIGENTE'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_MODALIDAD_COLABORACION' => 'Id  Modalidad  Colaboracion',
            'NOMBRE_MODALIDAD_COLABORACION' => 'Nombre  Modalidad  Colaboracion',
            'DESCRIPCION' => 'Descripcion',
            'VIGENTE' => 'Vigente',
        ];
    }
}
