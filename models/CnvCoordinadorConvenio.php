<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_coordinador_convenio".
 *
 * @property string $id_coordinador_convenio
 * @property string $rut_coordinador_convenio
 * @property string $nombre_coordinador_convenio
 * @property integer $dv_coordinador_convenio
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $vigente
 * @property string $esexterno
 * @property string $unidad_academica
 * @property string $email
 * @property integer $id_institucion2
 *
 * @property CoordinadosPor[] $coordinadosPors
 * @property CnvConvenio[] $idConvenios
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
            [['id_coordinador_convenio'], 'required'],
            [['dv_coordinador_convenio', 'id_institucion2'], 'integer'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['id_coordinador_convenio'], 'string', 'max' => 20],
            [['rut_coordinador_convenio'], 'string', 'max' => 10],
            [['nombre_coordinador_convenio', 'email'], 'string', 'max' => 500],
            [['vigente', 'esexterno'], 'string', 'max' => 1],
            [['unidad_academica'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_coordinador_convenio' => 'Id Coordinador Convenio',
            'rut_coordinador_convenio' => 'Rut Coordinador Convenio',
            'nombre_coordinador_convenio' => 'Nombre Coordinador Convenio',
            'dv_coordinador_convenio' => 'Dv Coordinador Convenio',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'vigente' => 'Vigente',
            'esexterno' => 'Esexterno',
            'unidad_academica' => 'Unidad Academica',
            'email' => 'Email',
            'id_institucion2' => 'Id Institucion2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoordinadosPors()
    {
        return $this->hasMany(CoordinadosPor::className(), ['id_coordinador_convenio' => 'id_coordinador_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdConvenios()
    {
        return $this->hasMany(CnvConvenio::className(), ['id_convenio' => 'id_convenio'])->viaTable('coordinados_por', ['id_coordinador_convenio' => 'id_coordinador_convenio']);
    }
}
