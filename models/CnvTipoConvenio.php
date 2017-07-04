<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_tipo_convenio".
 *
 * @property integer $ID_TIPO_CONVENIO
 * @property string $NOMBRE_TIPO_CONVENIO
 * @property string $NEMONICO
 * @property string $VIGENTE
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
            [['ID_TIPO_CONVENIO'], 'required'],
            [['ID_TIPO_CONVENIO'], 'integer'],
            [['NOMBRE_TIPO_CONVENIO'], 'string', 'max' => 200],
            [['NEMONICO', 'VIGENTE'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_TIPO_CONVENIO' => 'Id  Tipo  Convenio',
            'NOMBRE_TIPO_CONVENIO' => 'Nombre  Tipo  Convenio',
            'NEMONICO' => 'Nemonico',
            'VIGENTE' => 'Vigente',
        ];
    }
}
