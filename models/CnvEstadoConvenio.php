<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_estado_convenio".
 *
 * @property integer $ID_ESTADO_CONVENIO
 * @property string $NOMBRE_ESTADO_CONVENIO
 * @property string $DESCRIPCION
 * @property string $VIGENTE
 *
 * @property CnvConvenio[] $cnvConvenios
 */
class CnvEstadoConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_estado_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_ESTADO_CONVENIO'], 'required'],
            [['ID_ESTADO_CONVENIO'], 'integer'],
            [['NOMBRE_ESTADO_CONVENIO'], 'string', 'max' => 200],
            [['DESCRIPCION'], 'string', 'max' => 500],
            [['VIGENTE'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_ESTADO_CONVENIO' => 'Id  Estado  Convenio',
            'NOMBRE_ESTADO_CONVENIO' => 'Nombre  Estado  Convenio',
            'DESCRIPCION' => 'Descripcion',
            'VIGENTE' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvConvenios()
    {
        return $this->hasMany(CnvConvenio::className(), ['ID_ESTADO_CONVENIO' => 'ID_ESTADO_CONVENIO']);
    }
}
