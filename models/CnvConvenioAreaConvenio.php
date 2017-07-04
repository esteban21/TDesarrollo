<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_convenio_area_convenio".
 *
 * @property integer $ID_AREA_CONVENIO
 * @property integer $ID_CONVENIO
 */
class CnvConvenioAreaConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_convenio_area_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_AREA_CONVENIO', 'ID_CONVENIO'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_AREA_CONVENIO' => 'Id  Area  Convenio',
            'ID_CONVENIO' => 'Id  Convenio',
        ];
    }
}
