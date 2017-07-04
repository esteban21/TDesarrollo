<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_responsable_convenio".
 *
 * @property string $ID_RESPONSABLE_CONVENIO
 * @property string $RUT_RESPONSABLE_CONVENIO
 * @property integer $DV_RESPONSABLE_CONVENIO
 * @property string $NOMBRE_RESPONSABLE_CONVENIO
 * @property string $PATERNO_RESPONSABLE_CONVENIO
 * @property string $MATERNO_RESPONSABLE_CONVENIO
 * @property string $VIGENTE
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property string $UNIDAD_ACADEMICA
 */
class CnvResponsableConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_responsable_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_RESPONSABLE_CONVENIO', 'EMAIL', 'PASSWORD'], 'required'],
            [['DV_RESPONSABLE_CONVENIO'], 'integer'],
            [['ID_RESPONSABLE_CONVENIO', 'NOMBRE_RESPONSABLE_CONVENIO', 'PATERNO_RESPONSABLE_CONVENIO', 'MATERNO_RESPONSABLE_CONVENIO', 'EMAIL'], 'string', 'max' => 200],
            [['RUT_RESPONSABLE_CONVENIO'], 'string', 'max' => 10],
            [['VIGENTE'], 'string', 'max' => 1],
            [['PASSWORD', 'UNIDAD_ACADEMICA'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_RESPONSABLE_CONVENIO' => 'Id  Responsable  Convenio',
            'RUT_RESPONSABLE_CONVENIO' => 'Rut  Responsable  Convenio',
            'DV_RESPONSABLE_CONVENIO' => 'Dv  Responsable  Convenio',
            'NOMBRE_RESPONSABLE_CONVENIO' => 'Nombre  Responsable  Convenio',
            'PATERNO_RESPONSABLE_CONVENIO' => 'Paterno  Responsable  Convenio',
            'MATERNO_RESPONSABLE_CONVENIO' => 'Materno  Responsable  Convenio',
            'VIGENTE' => 'Vigente',
            'EMAIL' => 'Email',
            'PASSWORD' => 'Password',
            'UNIDAD_ACADEMICA' => 'Unidad  Academica',
        ];
    }
}
