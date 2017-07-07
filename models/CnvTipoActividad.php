<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_tipo_actividad".
 *
 * @property integer $id_tipo_actividad
 * @property string $nombre_tipo_actividad
 * @property string $descripcion
 * @property string $vigente
 *
 * @property CnvActividadConvenio[] $cnvActividadConvenios
 */
class CnvTipoActividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_tipo_actividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipo_actividad'], 'required'],
            [['id_tipo_actividad'], 'integer'],
            [['nombre_tipo_actividad'], 'string', 'max' => 300],
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
            'id_tipo_actividad' => 'Id Tipo Actividad',
            'nombre_tipo_actividad' => 'Nombre Tipo Actividad',
            'descripcion' => 'Descripcion',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvActividadConvenios()
    {
        return $this->hasMany(CnvActividadConvenio::className(), ['id_tipo_actividad' => 'id_tipo_actividad']);
    }
}
