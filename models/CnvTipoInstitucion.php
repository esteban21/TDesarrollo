<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_tipo_institucion".
 *
 * @property string $DESCRIPCION
 * @property integer $ID_TIPO_INSTITUCION
 * @property string $VIGENTE
 */
class CnvTipoInstitucion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_tipo_institucion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_TIPO_INSTITUCION'], 'required'],
            [['ID_TIPO_INSTITUCION'], 'integer'],
            [['DESCRIPCION'], 'string', 'max' => 200],
            [['VIGENTE'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DESCRIPCION' => 'Descripcion',
            'ID_TIPO_INSTITUCION' => 'Id  Tipo  Institucion',
            'VIGENTE' => 'Vigente',
        ];
    }
}
