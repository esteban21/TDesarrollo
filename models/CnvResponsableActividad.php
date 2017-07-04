<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_responsable_actividad".
 *
 * @property string $ID_RESPONSABLE_ACTIVIDAD
 * @property string $NOMBRE_RESPONSABLE
 * @property string $VIGENTE
 */
class CnvResponsableActividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_responsable_actividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_RESPONSABLE_ACTIVIDAD'], 'required'],
            [['ID_RESPONSABLE_ACTIVIDAD'], 'string', 'max' => 20],
            [['NOMBRE_RESPONSABLE'], 'string', 'max' => 200],
            [['VIGENTE'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_RESPONSABLE_ACTIVIDAD' => 'Id  Responsable  Actividad',
            'NOMBRE_RESPONSABLE' => 'Nombre  Responsable',
            'VIGENTE' => 'Vigente',
        ];
    }
}
