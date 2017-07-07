<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvActividadConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnv Actividad Convenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-actividad-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cnv Actividad Convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_actividad_convenio',
            'id_tipo_actividad',
            'id_responsable_actividad',
            'id_estado_actividad',
            'fecha_inicio',
            // 'fecha_fin',
            // 'nombre_actividad',
            // 'descripcion',
            // 'vigente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
