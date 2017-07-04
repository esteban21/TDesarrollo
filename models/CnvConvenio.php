<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_convenio".
 *
 * @property integer $ID_CONVENIO
 * @property integer $ID_TIPO_CONVENIO
 * @property string $ID_COORDINADOR_CONVENIO
 * @property integer $ID_ESTADO_CONVENIO
 * @property string $NOMBRE_CONVENIO
 * @property string $FECHA_INICIO
 * @property string $FECHA_TERMINO
 * @property string $FECHA_FIRMA
 * @property string $FECHA_DECRETO
 * @property integer $NUMERO_DECRETO
 * @property string $DESCRIPCION
 * @property string $VIGENTE
 * @property integer $VIGENCIA
 *
 * @property CnvActividadConvenio[] $cnvActividadConvenios
 * @property CnvEstadoConvenio $iDESTADOCONVENIO
 * @property CnvCoordinadorConvenio $iDCOORDINADORCONVENIO
 * @property CnvModalidadConvenio[] $cnvModalidadConvenios
 * @property CnvObjetivoConvenio[] $cnvObjetivoConvenios
 */
class CnvConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_CONVENIO', 'ID_TIPO_CONVENIO', 'ID_ESTADO_CONVENIO'], 'required'],
            [['ID_CONVENIO', 'ID_TIPO_CONVENIO', 'ID_ESTADO_CONVENIO', 'NUMERO_DECRETO', 'VIGENCIA'], 'integer'],
            [['FECHA_INICIO', 'FECHA_TERMINO', 'FECHA_FIRMA', 'FECHA_DECRETO'], 'safe'],
            [['ID_COORDINADOR_CONVENIO'], 'string', 'max' => 20],
            [['NOMBRE_CONVENIO', 'DESCRIPCION'], 'string', 'max' => 500],
            [['VIGENTE'], 'string', 'max' => 1],
            [['ID_ESTADO_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => CnvEstadoConvenio::className(), 'targetAttribute' => ['ID_ESTADO_CONVENIO' => 'ID_ESTADO_CONVENIO']],
            [['ID_COORDINADOR_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => CnvCoordinadorConvenio::className(), 'targetAttribute' => ['ID_COORDINADOR_CONVENIO' => 'ID_COORDINADOR_CONVENIO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_CONVENIO' => 'Id  Convenio',
            'ID_TIPO_CONVENIO' => 'Id  Tipo  Convenio',
            'ID_COORDINADOR_CONVENIO' => 'Id  Coordinador  Convenio',
            'ID_ESTADO_CONVENIO' => 'Id  Estado  Convenio',
            'NOMBRE_CONVENIO' => 'Nombre  Convenio',
            'FECHA_INICIO' => 'Fecha  Inicio',
            'FECHA_TERMINO' => 'Fecha  Termino',
            'FECHA_FIRMA' => 'Fecha  Firma',
            'FECHA_DECRETO' => 'Fecha  Decreto',
            'NUMERO_DECRETO' => 'Numero  Decreto',
            'DESCRIPCION' => 'Descripcion',
            'VIGENTE' => 'Vigente',
            'VIGENCIA' => 'Vigencia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvActividadConvenios()
    {
        return $this->hasMany(CnvActividadConvenio::className(), ['ID_CONVENIO' => 'ID_CONVENIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDESTADOCONVENIO()
    {
        return $this->hasOne(CnvEstadoConvenio::className(), ['ID_ESTADO_CONVENIO' => 'ID_ESTADO_CONVENIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDCOORDINADORCONVENIO()
    {
        return $this->hasOne(CnvCoordinadorConvenio::className(), ['ID_COORDINADOR_CONVENIO' => 'ID_COORDINADOR_CONVENIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvModalidadConvenios()
    {
        return $this->hasMany(CnvModalidadConvenio::className(), ['ID_CONVENIO' => 'ID_CONVENIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvObjetivoConvenios()
    {
        return $this->hasMany(CnvObjetivoConvenio::className(), ['ID_CONVENIO' => 'ID_CONVENIO']);
    }
}
