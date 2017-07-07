<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvinstitucionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Editar Instituciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-institucion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre_institucion',
            'id_institucion',
            'id_pais',
            'id_tipo_institucion',
            'vigente',
            // 'rut_institucion',
            // 'razon_social_institucion',
            // 'direccion_institucion',
            // 'telefono_institucion',
            // 'email_institucion:email',
            // 'link_institucion',

             ['class' => 'yii\grid\ActionColumn','template' => '{update} '],
        ],
    ]); ?>
</div>