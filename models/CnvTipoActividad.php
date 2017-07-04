<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_tipo_actividad".
 *
 * @property integer $ID_TIPO_ACTIVIDAD
 * @property string $NOMBRE_TIPO_ACTIVIDAD
 * @property string $DESCRIPCION
 * @property string $VIGENTE
 */
class CnvTipoActividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_tipo_actividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_TIPO_ACTIVIDAD'], 'required'],
            [['ID_TIPO_ACTIVIDAD'], 'integer'],
            [['NOMBRE_TIPO_ACTIVIDAD'], 'string', 'max' => 300],
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
            'ID_TIPO_ACTIVIDAD' => 'Id  Tipo  Actividad',
            'NOMBRE_TIPO_ACTIVIDAD' => 'Nombre  Tipo  Actividad',
            'DESCRIPCION' => 'Descripcion',
            'VIGENTE' => 'Vigente',
        ];
    }
}
