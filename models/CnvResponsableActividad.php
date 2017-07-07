<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_responsable_actividad".
 *
 * @property string $id_responsable_actividad
 * @property string $nombre_responsable
 * @property string $vigente
 *
 * @property CnvActividadConvenio[] $cnvActividadConvenios
 */
class CnvResponsableActividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_responsable_actividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_responsable_actividad'], 'required'],
            [['id_responsable_actividad'], 'string', 'max' => 20],
            [['nombre_responsable'], 'string', 'max' => 200],
            [['vigente'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_responsable_actividad' => 'Id Responsable Actividad',
            'nombre_responsable' => 'Nombre Responsable',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvActividadConvenios()
    {
        return $this->hasMany(CnvActividadConvenio::className(), ['id_responsable_actividad' => 'id_responsable_actividad']);
    }
}
