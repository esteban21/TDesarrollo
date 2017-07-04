<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_objetivo_convenio".
 *
 * @property integer $ID_OBJETIVO_CONVENIO
 * @property integer $ID_CONVENIO
 * @property string $TEXTO_OBJETIVO
 * @property string $VIGENTE
 *
 * @property CnvConvenio $iDCONVENIO
 */
class CnvObjetivoConvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_objetivo_convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_OBJETIVO_CONVENIO'], 'required'],
            [['ID_OBJETIVO_CONVENIO', 'ID_CONVENIO'], 'integer'],
            [['TEXTO_OBJETIVO'], 'string', 'max' => 500],
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
            'ID_OBJETIVO_CONVENIO' => 'Id  Objetivo  Convenio',
            'ID_CONVENIO' => 'Id  Convenio',
            'TEXTO_OBJETIVO' => 'Texto  Objetivo',
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
