<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_convenio".
 *
 * @property integer $id_convenio
 * @property integer $id_institucion
 * @property integer $id_tipo_convenio
 * @property integer $id_estado_convenio
 * @property integer $id_objetivo_convenio
 * @property integer $id_actividad_convenio
 * @property string $nombre_convenio
 * @property string $fecha_inicio
 * @property string $fecha_termino
 * @property string $fecha_firma
 * @property string $fecha_decreto
 * @property integer $numero_decreto
 * @property string $descripcion
 * @property string $vigente
 * @property integer $vigencia
 *
 * @property CnvActividadConvenio $idActividadConvenio
 * @property CnvEstadoConvenio $idEstadoConvenio
 * @property CnvInstitucion $idInstitucion
 * @property CnvTipoConvenio $idTipoConvenio
 * @property CnvObjetivoConvenio $idObjetivoConvenio
 * @property ContenidosEn[] $contenidosEns
 * @property CnvAreaConvenio[] $idAreaConvenios
 * @property CoordinadosPor[] $coordinadosPors
 * @property CnvCoordinadorConvenio[] $idCoordinadorConvenios
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
            [['id_convenio', 'id_estado_convenio'], 'required'],
            [['id_convenio', 'id_institucion', 'id_tipo_convenio', 'id_estado_convenio', 'id_objetivo_convenio', 'id_actividad_convenio', 'numero_decreto', 'vigencia'], 'integer'],
            [['fecha_inicio', 'fecha_termino', 'fecha_firma', 'fecha_decreto'], 'safe'],
            [['nombre_convenio', 'descripcion'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 1],
            [['id_actividad_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => CnvActividadConvenio::className(), 'targetAttribute' => ['id_actividad_convenio' => 'id_actividad_convenio']],
            [['id_estado_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => CnvEstadoConvenio::className(), 'targetAttribute' => ['id_estado_convenio' => 'id_estado_convenio']],
            [['id_institucion'], 'exist', 'skipOnError' => true, 'targetClass' => CnvInstitucion::className(), 'targetAttribute' => ['id_institucion' => 'id_institucion']],
            [['id_tipo_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => CnvTipoConvenio::className(), 'targetAttribute' => ['id_tipo_convenio' => 'id_tipo_convenio']],
            [['id_objetivo_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => CnvObjetivoConvenio::className(), 'targetAttribute' => ['id_objetivo_convenio' => 'id_objetivo_convenio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_convenio' => 'Id Convenio',
            'id_institucion' => 'Id Institucion',
            'id_tipo_convenio' => 'Id Tipo Convenio',
            'id_estado_convenio' => 'Id Estado Convenio',
            'id_objetivo_convenio' => 'Id Objetivo Convenio',
            'id_actividad_convenio' => 'Id Actividad Convenio',
            'nombre_convenio' => 'Nombre Convenio',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_termino' => 'Fecha Termino',
            'fecha_firma' => 'Fecha Firma',
            'fecha_decreto' => 'Fecha Decreto',
            'numero_decreto' => 'Numero Decreto',
            'descripcion' => 'Descripcion',
            'vigente' => 'Vigente',
            'vigencia' => 'Vigencia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdActividadConvenio()
    {
        return $this->hasOne(CnvActividadConvenio::className(), ['id_actividad_convenio' => 'id_actividad_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEstadoConvenio()
    {
        return $this->hasOne(CnvEstadoConvenio::className(), ['id_estado_convenio' => 'id_estado_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdInstitucion()
    {
        return $this->hasOne(CnvInstitucion::className(), ['id_institucion' => 'id_institucion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoConvenio()
    {
        return $this->hasOne(CnvTipoConvenio::className(), ['id_tipo_convenio' => 'id_tipo_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdObjetivoConvenio()
    {
        return $this->hasOne(CnvObjetivoConvenio::className(), ['id_objetivo_convenio' => 'id_objetivo_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContenidosEns()
    {
        return $this->hasMany(ContenidosEn::className(), ['id_convenio' => 'id_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAreaConvenios()
    {
        return $this->hasMany(CnvAreaConvenio::className(), ['id_area_convenio' => 'id_area_convenio'])->viaTable('contenidos_en', ['id_convenio' => 'id_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoordinadosPors()
    {
        return $this->hasMany(CoordinadosPor::className(), ['id_convenio' => 'id_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCoordinadorConvenios()
    {
        return $this->hasMany(CnvCoordinadorConvenio::className(), ['id_coordinador_convenio' => 'id_coordinador_convenio'])->viaTable('coordinados_por', ['id_convenio' => 'id_convenio']);
    }
}
