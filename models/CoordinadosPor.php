<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coordinados_por".
 *
 * @property integer $id_convenio
 * @property string $id_coordinador_convenio
 *
 * @property CnvConvenio $idConvenio
 * @property CnvCoordinadorConvenio $idCoordinadorConvenio
 */
class CoordinadosPor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'coordinados_por';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_convenio', 'id_coordinador_convenio'], 'required'],
            [['id_convenio'], 'integer'],
            [['id_coordinador_convenio'], 'string', 'max' => 20],
            [['id_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => CnvConvenio::className(), 'targetAttribute' => ['id_convenio' => 'id_convenio']],
            [['id_coordinador_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => CnvCoordinadorConvenio::className(), 'targetAttribute' => ['id_coordinador_convenio' => 'id_coordinador_convenio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_convenio' => 'Id Convenio',
            'id_coordinador_convenio' => 'Id Coordinador Convenio',
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
    public function getIdCoordinadorConvenio()
    {
        return $this->hasOne(CnvCoordinadorConvenio::className(), ['id_coordinador_convenio' => 'id_coordinador_convenio']);
    }
}
