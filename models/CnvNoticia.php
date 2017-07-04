<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnv_noticia".
 *
 * @property integer $id_noticia
 * @property string $titulo
 * @property string $cuerpo
 * @property string $fecha
 * @property string $url_imagen
 * @property string $vigente
 */
class CnvNoticia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnv_noticia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_noticia', 'titulo', 'cuerpo', 'fecha', 'vigente'], 'required'],
            [['id_noticia'], 'integer'],
            [['cuerpo'], 'string'],
            [['fecha'], 'safe'],
            [['titulo', 'url_imagen'], 'string', 'max' => 500],
            [['vigente'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_noticia' => 'Id Noticia',
            'titulo' => 'Titulo',
            'cuerpo' => 'Cuerpo',
            'fecha' => 'Fecha',
            'url_imagen' => 'Url Imagen',
            'vigente' => 'Vigente',
        ];
    }
}
