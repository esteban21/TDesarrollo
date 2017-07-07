<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contenidos_en".
 *
 * @property integer $id_convenio
 * @property integer $id_area_convenio
 *
 * @property CnvConvenio $idConvenio
 * @property CnvAreaConvenio $idAreaConvenio
 */
class ContenidosEn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contenidos_en';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_convenio', 'id_area_convenio'], 'required'],
            [['id_convenio', 'id_area_convenio'], 'integer'],
            [['id_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => CnvConvenio::className(), 'targetAttribute' => ['id_convenio' => 'id_convenio']],
            [['id_area_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => CnvAreaConvenio::className(), 'targetAttribute' => ['id_area_convenio' => 'id_area_convenio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_convenio' => 'Id Convenio',
            'id_area_convenio' => 'Id Area Convenio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdConvenio()
    {
        return $this->hasOne(CnvConvenio::className(), ['id_convenio' => 'id_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAreaConvenio()
    {
        return $this->hasOne(CnvAreaConvenio::className(), ['id_area_convenio' => 'id_area_convenio']);
    }
}
