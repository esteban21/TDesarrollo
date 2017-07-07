<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_estado_actividad".
 *
 * @property integer $id_estado_actividad
 * @property string $nombre_estado
 * @property string $descripcion
 * @property string $vigente
 *
 * @property CnvActividadConvenio[] $cnvActividadConvenios
 */
class CnvEstadoActividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_estado_actividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_estado_actividad'], 'required'],
            [['id_estado_actividad'], 'integer'],
            [['nombre_estado'], 'string', 'max' => 200],
            [['descripcion'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estado_actividad' => 'Id Estado Actividad',
            'nombre_estado' => 'Nombre Estado',
            'descripcion' => 'Descripcion',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvActividadConvenios()
    {
        return $this->hasMany(CnvActividadConvenio::className(), ['id_estado_actividad' => 'id_estado_actividad']);
    }
}
