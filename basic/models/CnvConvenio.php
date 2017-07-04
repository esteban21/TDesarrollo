<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_convenio".
 *
 * @property int $id_convenio
 * @property int $id_tipo_convenio
 * @property string $id_coordinador_convenio
 * @property int $id_estado_convenio
 * @property string $nombre_convenio
 * @property string $fecha_inicio
 * @property string $fecha_termino
 * @property string $fecha_firma
 * @property string $fecha_decreto
 * @property int $numero_decreto
 * @property string $descripcion
 * @property string $vigente
 * @property int $vigencia
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
            [['id_convenio'], 'required'],
            [['id_convenio', 'id_tipo_convenio', 'id_estado_convenio', 'numero_decreto', 'vigencia'], 'integer'],
            [['fecha_inicio', 'fecha_termino', 'fecha_firma', 'fecha_decreto'], 'safe'],
            [['id_coordinador_convenio'], 'string', 'max' => 20],
            [['nombre_convenio', 'descripcion'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 1],
            [['id_convenio'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_convenio' => 'Id Convenio',
            'id_tipo_convenio' => 'Id Tipo Convenio',
            'id_coordinador_convenio' => 'Id Coordinador Convenio',
            'id_estado_convenio' => 'Id Estado Convenio',
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
}
