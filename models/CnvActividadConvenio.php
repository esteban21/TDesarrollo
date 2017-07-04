<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_actividad_convenio".
 *
 * @property integer $ID_ESTADO_ACTIVIDAD
 * @property integer $ID_TIPO_ACTIVIDAD
 * @property string $ID_RESPONSABLE_ACTIVIDAD
 * @property string $FECHA_INICIO
 * @property string $FECHA_FIN
 * @property integer $ID_ACTIVIDAD_CONVENIO
 * @property integer $ID_CONVENIO
 * @property string $NOMBRE_ACTIVIDAD
 * @property string $DESCRIPCION
 * @property string $VIGENTE
 *
 * @property CnvConvenio $iDCONVENIO
 */
class CnvActividadConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_actividad_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_ESTADO_ACTIVIDAD', 'ID_TIPO_ACTIVIDAD', 'ID_RESPONSABLE_ACTIVIDAD', 'ID_ACTIVIDAD_CONVENIO'], 'required'],
            [['ID_ESTADO_ACTIVIDAD', 'ID_TIPO_ACTIVIDAD', 'ID_ACTIVIDAD_CONVENIO', 'ID_CONVENIO'], 'integer'],
            [['FECHA_INICIO', 'FECHA_FIN'], 'safe'],
            [['ID_RESPONSABLE_ACTIVIDAD'], 'string', 'max' => 20],
            [['NOMBRE_ACTIVIDAD'], 'string', 'max' => 200],
            [['DESCRIPCION'], 'string', 'max' => 500],
            [['VIGENTE'], 'string', 'max' => 1],
            [['ID_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => CnvConvenio::className(), 'targetAttribute' => ['ID_CONVENIO' => 'ID_CONVENIO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_ESTADO_ACTIVIDAD' => 'Id  Estado  Actividad',
            'ID_TIPO_ACTIVIDAD' => 'Id  Tipo  Actividad',
            'ID_RESPONSABLE_ACTIVIDAD' => 'Id  Responsable  Actividad',
            'FECHA_INICIO' => 'Fecha  Inicio',
            'FECHA_FIN' => 'Fecha  Fin',
            'ID_ACTIVIDAD_CONVENIO' => 'Id  Actividad  Convenio',
            'ID_CONVENIO' => 'Id  Convenio',
            'NOMBRE_ACTIVIDAD' => 'Nombre  Actividad',
            'DESCRIPCION' => 'Descripcion',
            'VIGENTE' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDCONVENIO()
    {
        return $this->hasOne(CnvConvenio::className(), ['ID_CONVENIO' => 'ID_CONVENIO']);
    }
}
