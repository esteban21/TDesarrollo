<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_area_convenio".
 *
 * @property integer $id_area_convenio
 * @property string $nombre_area_convenio
 * @property string $descripcion
 * @property string $vigente
 *
 * @property ContenidosEn[] $contenidosEns
 * @property CnvConvenio[] $idConvenios
 */
class CnvAreaConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_area_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_area_convenio'], 'required'],
            [['id_area_convenio'], 'integer'],
            [['nombre_area_convenio'], 'string', 'max' => 200],
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
            'id_area_convenio' => 'Id Area Convenio',
            'nombre_area_convenio' => 'Nombre Area Convenio',
            'descripcion' => 'Descripcion',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContenidosEns()
    {
        return $this->hasMany(ContenidosEn::className(), ['id_area_convenio' => 'id_area_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdConvenios()
    {
        return $this->hasMany(CnvConvenio::className(), ['id_convenio' => 'id_convenio'])->viaTable('contenidos_en', ['id_area_convenio' => 'id_area_convenio']);
    }
}
