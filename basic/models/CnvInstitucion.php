<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "cnv_institucion".
 *
 * @property string $nombre_institucion
 * @property integer $id_institucion
 * @property integer $id_pais
 * @property integer $id_tipo_institucion
 * @property string $vigente
 * @property string $rut_institucion
 * @property string $razon_social_institucion
 * @property string $direccion_institucion
 * @property string $telefono_institucion
 * @property string $email_institucion
 * @property string $link_institucion
 *
 * @property CnvConvenio[] $cnvConvenios
 * @property CnvPais $idPais
 * @property CnvTipoInstitucion $idTipoInstitucion
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
            [['nombre_institucion', 'id_institucion', 'id_pais'], 'required'],
            [['id_institucion', 'id_pais', 'id_tipo_institucion'], 'integer'],
            [['nombre_institucion', 'razon_social_institucion', 'direccion_institucion'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 1],
            [['rut_institucion'], 'string', 'max' => 12],
            [['telefono_institucion'], 'string', 'max' => 100],
            [['email_institucion', 'link_institucion'], 'string', 'max' => 200],
            [['id_pais'], 'exist', 'skipOnError' => true, 'targetClass' => CnvPais::className(), 'targetAttribute' => ['id_pais' => 'id_pais']],
            [['id_tipo_institucion'], 'exist', 'skipOnError' => true, 'targetClass' => CnvTipoInstitucion::className(), 'targetAttribute' => ['id_tipo_institucion' => 'id_tipo_institucion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombre_institucion' => 'Nombre Institucion',
            'id_institucion' => 'Id Institucion',
            'id_pais' => 'Id Pais',
            'id_tipo_institucion' => 'Id Tipo Institucion',
            'vigente' => 'Vigente',
            'rut_institucion' => 'Rut Institucion',
            'razon_social_institucion' => 'Razon Social Institucion',
            'direccion_institucion' => 'Direccion Institucion',
            'telefono_institucion' => 'Telefono Institucion',
            'email_institucion' => 'Email Institucion',
            'link_institucion' => 'Link Institucion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnvConvenios()
    {
        return $this->hasMany(CnvConvenio::className(), ['id_institucion' => 'id_institucion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPais()
    {
        return $this->hasOne(CnvPais::className(), ['id_pais' => 'id_pais']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoInstitucion()
    {
        return $this->hasOne(CnvTipoInstitucion::className(), ['id_tipo_institucion' => 'id_tipo_institucion']);
    }


    public function getcomboCnvpais() { 
        $models = CnvPais::find()->asArray()->all();
        return ArrayHelper::map($models, 'id_pais', 'nombre_pais');
    }

    public function getcomboCnvtipoinstitucion() { 
        $models = CnvTipoInstitucion::find()->asArray()->all();
        return ArrayHelper::map($models, 'id_tipo_institucion', 'descripcion');
    }

}
