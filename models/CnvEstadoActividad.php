<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_estado_actividad".
 *
 * @property integer $ID_ESTADO_ACTIVIDAD
 * @property string $NOMBRE_ESTADO
 * @property string $DESCRIPCION
 * @property string $VIGENTE
 */
class CnvEstadoActividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_estado_actividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_ESTADO_ACTIVIDAD'], 'required'],
            [['ID_ESTADO_ACTIVIDAD'], 'integer'],
            [['NOMBRE_ESTADO'], 'string', 'max' => 200],
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
            'ID_ESTADO_ACTIVIDAD' => 'Id  Estado  Actividad',
            'NOMBRE_ESTADO' => 'Nombre  Estado',
            'DESCRIPCION' => 'Descripcion',
            'VIGENTE' => 'Vigente',
        ];
    }
}
