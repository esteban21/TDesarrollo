<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_participante_convenio".
 *
 * @property string $RUT_PARTICIPANTE_CONVENIO
 * @property integer $DV_PARTICIPANTE_CONVENIO
 * @property string $NOMBRE_PARTICIPANTE_CONVENIO
 * @property string $PATERNO_PARTICIPANTE_CONVENIO
 * @property string $MATERNO_PARTICIPANTE_CONVENIO
 * @property string $VIGENTE
 */
class CnvParticipanteConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_participante_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RUT_PARTICIPANTE_CONVENIO', 'DV_PARTICIPANTE_CONVENIO'], 'required'],
            [['DV_PARTICIPANTE_CONVENIO'], 'integer'],
            [['RUT_PARTICIPANTE_CONVENIO'], 'string', 'max' => 10],
            [['NOMBRE_PARTICIPANTE_CONVENIO', 'PATERNO_PARTICIPANTE_CONVENIO', 'MATERNO_PARTICIPANTE_CONVENIO'], 'string', 'max' => 200],
            [['VIGENTE'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RUT_PARTICIPANTE_CONVENIO' => 'Rut  Participante  Convenio',
            'DV_PARTICIPANTE_CONVENIO' => 'Dv  Participante  Convenio',
            'NOMBRE_PARTICIPANTE_CONVENIO' => 'Nombre  Participante  Convenio',
            'PATERNO_PARTICIPANTE_CONVENIO' => 'Paterno  Participante  Convenio',
            'MATERNO_PARTICIPANTE_CONVENIO' => 'Materno  Participante  Convenio',
            'VIGENTE' => 'Vigente',
        ];
    }
}
