<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "cnv_tipo_institucion".
 *
 * @property string $descripcion
 * @property integer $id_tipo_institucion
 * @property string $vigente
 *
 * @property CnvInstitucion[] $cnvInstitucions
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
            [['id_tipo_institucion'], 'required'],
            [['id_tipo_institucion'], 'integer'],
            [['descripcion'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'descripcion' => 'Descripcion',
            'id_tipo_institucion' => 'Id Tipo Institucion',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvInstitucions()
    {
        return $this->hasMany(CnvInstitucion::className(), ['id_tipo_institucion' => 'id_tipo_institucion']);
    }
}
