<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_tipo_convenio".
 *
 * @property integer $id_tipo_convenio
 * @property string $nombre_tipo_convenio
 * @property string $nemonico
 * @property string $vigente
 *
 * @property CnvConvenio[] $cnvConvenios
 */
class CnvTipoConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_tipo_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipo_convenio'], 'required'],
            [['id_tipo_convenio'], 'integer'],
            [['nombre_tipo_convenio'], 'string', 'max' => 200],
            [['nemonico', 'vigente'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipo_convenio' => 'Id Tipo Convenio',
            'nombre_tipo_convenio' => 'Nombre Tipo Convenio',
            'nemonico' => 'Nemonico',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvConvenios()
    {
        return $this->hasMany(CnvConvenio::className(), ['id_tipo_convenio' => 'id_tipo_convenio']);
    }
}
