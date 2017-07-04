<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_tipo_documento".
 *
 * @property integer $ID_TIPO_DOCUMENTO
 * @property string $NOMBRE_TIPO_DOCUMENTO
 * @property string $DESCRIPCION
 * @property string $VIGENTE
 */
class CnvTipoDocumento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_tipo_documento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_TIPO_DOCUMENTO'], 'required'],
            [['ID_TIPO_DOCUMENTO'], 'integer'],
            [['NOMBRE_TIPO_DOCUMENTO'], 'string', 'max' => 200],
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
            'ID_TIPO_DOCUMENTO' => 'Id  Tipo  Documento',
            'NOMBRE_TIPO_DOCUMENTO' => 'Nombre  Tipo  Documento',
            'DESCRIPCION' => 'Descripcion',
            'VIGENTE' => 'Vigente',
        ];
    }
}
