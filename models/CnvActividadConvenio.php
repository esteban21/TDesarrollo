<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_actividad_convenio".
 *
 * @property integer $id_actividad_convenio
 * @property integer $id_tipo_actividad
 * @property string $id_responsable_actividad
 * @property integer $id_estado_actividad
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $nombre_actividad
 * @property string $descripcion
 * @property string $vigente
 *
 * @property CnvTipoActividad $idTipoActividad
 * @property CnvResponsableActividad $idResponsableActividad
 * @property CnvEstadoActividad $idEstadoActividad
 * @property CnvConvenio[] $cnvConvenios
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
            [['id_actividad_convenio', 'id_tipo_actividad', 'id_estado_actividad'], 'required'],
            [['id_actividad_convenio', 'id_tipo_actividad', 'id_estado_actividad'], 'integer'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['id_responsable_actividad'], 'string', 'max' => 20],
            [['nombre_actividad'], 'string', 'max' => 200],
            [['descripcion'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 1],
            [['id_tipo_actividad'], 'exist', 'skipOnError' => true, 'targetClass' => CnvTipoActividad::className(), 'targetAttribute' => ['id_tipo_actividad' => 'id_tipo_actividad']],
            [['id_responsable_actividad'], 'exist', 'skipOnError' => true, 'targetClass' => CnvResponsableActividad::className(), 'targetAttribute' => ['id_responsable_actividad' => 'id_responsable_actividad']],
            [['id_estado_actividad'], 'exist', 'skipOnError' => true, 'targetClass' => CnvEstadoActividad::className(), 'targetAttribute' => ['id_estado_actividad' => 'id_estado_actividad']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_actividad_convenio' => 'Id Actividad Convenio',
            'id_tipo_actividad' => 'Id Tipo Actividad',
            'id_responsable_actividad' => 'Id Responsable Actividad',
            'id_estado_actividad' => 'Id Estado Actividad',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'nombre_actividad' => 'Nombre Actividad',
            'descripcion' => 'Descripcion',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoActividad()
    {
        return $this->hasOne(CnvTipoActividad::className(), ['id_tipo_actividad' => 'id_tipo_actividad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdResponsableActividad()
    {
        return $this->hasOne(CnvResponsableActividad::className(), ['id_responsable_actividad' => 'id_responsable_actividad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEstadoActividad()
    {
        return $this->hasOne(CnvEstadoActividad::className(), ['id_estado_actividad' => 'id_estado_actividad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvConvenios()
    {
        return $this->hasMany(CnvConvenio::className(), ['id_actividad_convenio' => 'id_actividad_convenio']);
    }
}
