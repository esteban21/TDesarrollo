<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_participante_actividad".
 *
 * @property string $ID_PARTICIPANTE
 * @property string $RUT_PARTICIPANTE
 * @property integer $DV_PARTICIPANTE
 * @property string $NOMBRE_PARTICIPANTE
 * @property string $CARGO_PARTICIPANTE
 * @property string $PAIS_PARTICIPANTE
 * @property string $VIGENTE
 * @property string $ESPECIALIDAD
 */
class CnvParticipanteActividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_participante_actividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PARTICIPANTE'], 'required'],
            [['DV_PARTICIPANTE'], 'integer'],
            [['ID_PARTICIPANTE'], 'string', 'max' => 20],
            [['RUT_PARTICIPANTE'], 'string', 'max' => 10],
            [['NOMBRE_PARTICIPANTE', 'PAIS_PARTICIPANTE'], 'string', 'max' => 200],
            [['CARGO_PARTICIPANTE', 'ESPECIALIDAD'], 'string', 'max' => 500],
            [['VIGENTE'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_PARTICIPANTE' => 'Id  Participante',
            'RUT_PARTICIPANTE' => 'Rut  Participante',
            'DV_PARTICIPANTE' => 'Dv  Participante',
            'NOMBRE_PARTICIPANTE' => 'Nombre  Participante',
            'CARGO_PARTICIPANTE' => 'Cargo  Participante',
            'PAIS_PARTICIPANTE' => 'Pais  Participante',
            'VIGENTE' => 'Vigente',
            'ESPECIALIDAD' => 'Especialidad',
        ];
    }
}
