<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_area_convenio".
 *
 * @property integer $ID_AREA_CONVENIO
 * @property string $NOMBRE_AREA_CONVENIO
 * @property string $DESCRIPCION
 * @property string $VIGENTE
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
            [['ID_AREA_CONVENIO'], 'required'],
            [['ID_AREA_CONVENIO'], 'integer'],
            [['NOMBRE_AREA_CONVENIO'], 'string', 'max' => 200],
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
            'ID_AREA_CONVENIO' => 'Id  Area  Convenio',
            'NOMBRE_AREA_CONVENIO' => 'Nombre  Area  Convenio',
            'DESCRIPCION' => 'Descripcion',
            'VIGENTE' => 'Vigente',
        ];
    }
}
