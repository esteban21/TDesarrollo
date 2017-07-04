<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_institucion".
 *
 * @property integer $ID_TIPO_INSTITUCION
 * @property string $NOMBRE_INSTITUCION
 * @property integer $ID_INSTITUCION
 * @property integer $ID_PAIS
 * @property string $VIGENTE
 * @property string $ID_INTERNACIONAL
 * @property string $RUT_INSTITUCION
 * @property string $RAZON_SOCIAL_INSTITUCION
 * @property string $DIRECCION_INSTITUCION
 * @property string $TELEFONO_INSTITUCION
 * @property string $EMAIL_INSTITUCION
 * @property string $LINK_INSTITUCION
 */
class CnvInstitucion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_institucion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_TIPO_INSTITUCION', 'NOMBRE_INSTITUCION', 'ID_INSTITUCION', 'ID_PAIS'], 'required'],
            [['ID_TIPO_INSTITUCION', 'ID_INSTITUCION', 'ID_PAIS'], 'integer'],
            [['NOMBRE_INSTITUCION', 'RAZON_SOCIAL_INSTITUCION', 'DIRECCION_INSTITUCION'], 'string', 'max' => 500],
            [['VIGENTE', 'ID_INTERNACIONAL'], 'string', 'max' => 1],
            [['RUT_INSTITUCION'], 'string', 'max' => 12],
            [['TELEFONO_INSTITUCION'], 'string', 'max' => 100],
            [['EMAIL_INSTITUCION', 'LINK_INSTITUCION'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_TIPO_INSTITUCION' => 'Id  Tipo  Institucion',
            'NOMBRE_INSTITUCION' => 'Nombre  Institucion',
            'ID_INSTITUCION' => 'Id  Institucion',
            'ID_PAIS' => 'Id  Pais',
            'VIGENTE' => 'Vigente',
            'ID_INTERNACIONAL' => 'Id  Internacional',
            'RUT_INSTITUCION' => 'Rut  Institucion',
            'RAZON_SOCIAL_INSTITUCION' => 'Razon  Social  Institucion',
            'DIRECCION_INSTITUCION' => 'Direccion  Institucion',
            'TELEFONO_INSTITUCION' => 'Telefono  Institucion',
            'EMAIL_INSTITUCION' => 'Email  Institucion',
            'LINK_INSTITUCION' => 'Link  Institucion',
        ];
    }
}
