<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_login".
 *
 * @property string $IP_LOGIN
 * @property string $INICIO_LOGIN
 * @property string $FIN_LOGIN
 * @property integer $ID_LOGIN
 * @property string $RUT_USUARIO
 * @property integer $DV_USUARIO
 */
class CnvLogin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['INICIO_LOGIN', 'FIN_LOGIN'], 'safe'],
            [['ID_LOGIN'], 'required'],
            [['ID_LOGIN', 'DV_USUARIO'], 'integer'],
            [['IP_LOGIN'], 'string', 'max' => 200],
            [['RUT_USUARIO'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IP_LOGIN' => 'Ip  Login',
            'INICIO_LOGIN' => 'Inicio  Login',
            'FIN_LOGIN' => 'Fin  Login',
            'ID_LOGIN' => 'Id  Login',
            'RUT_USUARIO' => 'Rut  Usuario',
            'DV_USUARIO' => 'Dv  Usuario',
        ];
    }
}
