<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_modalidad_convenio".
 *
 * @property integer $ID_MODALIDAD_CONVENIO
 * @property integer $ID_CONVENIO
 * @property string $NOMBRE_MODALIDAD_CONVENIO
 * @property string $DESCRIPCION
 * @property string $VIGENTE
 *
 * @property CnvConvenio $iDCONVENIO
 */
class CnvModalidadConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_modalidad_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_MODALIDAD_CONVENIO'], 'required'],
            [['ID_MODALIDAD_CONVENIO', 'ID_CONVENIO'], 'integer'],
            [['NOMBRE_MODALIDAD_CONVENIO'], 'string', 'max' => 200],
            [['DESCRIPCION'], 'string', 'max' => 500],
            [['VIGENTE'], 'string', 'max' => 1],
            [['ID_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => CnvConvenio::className(), 'targetAttribute' => ['ID_CONVENIO' => 'ID_CONVENIO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_MODALIDAD_CONVENIO' => 'Id  Modalidad  Convenio',
            'ID_CONVENIO' => 'Id  Convenio',
            'NOMBRE_MODALIDAD_CONVENIO' => 'Nombre  Modalidad  Convenio',
            'DESCRIPCION' => 'Descripcion',
            'VIGENTE' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDCONVENIO()
    {
        return $this->hasOne(CnvConvenio::className(), ['ID_CONVENIO' => 'ID_CONVENIO']);
    }
}
