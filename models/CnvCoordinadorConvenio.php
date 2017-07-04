<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_coordinador_convenio".
 *
 * @property string $ID_COORDINADOR_CONVENIO
 * @property string $RUT_COORDINADOR_CONVENIO
 * @property string $NOMBRE_COORDINADOR_CONVENIO
 * @property integer $DV_COORDINADOR_CONVENIO
 * @property string $FECHA_INICIO
 * @property string $FECHA_FIN
 * @property string $VIGENTE
 * @property string $ESEXTERNO
 * @property string $UNIDAD_ACADEMICA
 * @property string $EMAIL
 * @property integer $ID_INSTITUCION
 *
 * @property CnvConvenio[] $cnvConvenios
 */
class CnvCoordinadorConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_coordinador_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_COORDINADOR_CONVENIO'], 'required'],
            [['DV_COORDINADOR_CONVENIO', 'ID_INSTITUCION'], 'integer'],
            [['FECHA_INICIO', 'FECHA_FIN'], 'safe'],
            [['ID_COORDINADOR_CONVENIO'], 'string', 'max' => 20],
            [['RUT_COORDINADOR_CONVENIO'], 'string', 'max' => 10],
            [['NOMBRE_COORDINADOR_CONVENIO', 'EMAIL'], 'string', 'max' => 500],
            [['VIGENTE', 'ESEXTERNO'], 'string', 'max' => 1],
            [['UNIDAD_ACADEMICA'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_COORDINADOR_CONVENIO' => 'Id  Coordinador  Convenio',
            'RUT_COORDINADOR_CONVENIO' => 'Rut  Coordinador  Convenio',
            'NOMBRE_COORDINADOR_CONVENIO' => 'Nombre  Coordinador  Convenio',
            'DV_COORDINADOR_CONVENIO' => 'Dv  Coordinador  Convenio',
            'FECHA_INICIO' => 'Fecha  Inicio',
            'FECHA_FIN' => 'Fecha  Fin',
            'VIGENTE' => 'Vigente',
            'ESEXTERNO' => 'Esexterno',
            'UNIDAD_ACADEMICA' => 'Unidad  Academica',
            'EMAIL' => 'Email',
            'ID_INSTITUCION' => 'Id  Institucion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvConvenios()
    {
        return $this->hasMany(CnvConvenio::className(), ['ID_COORDINADOR_CONVENIO' => 'ID_COORDINADOR_CONVENIO']);
    }
}
