<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnv Convenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cnv Convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_convenio',
            'id_institucion',
            'id_tipo_convenio',
            'id_estado_convenio',
            'id_objetivo_convenio',
            // 'id_actividad_convenio',
            // 'nombre_convenio',
            // 'fecha_inicio',
            // 'fecha_termino',
            // 'fecha_firma',
            // 'fecha_decreto',
            // 'numero_decreto',
            // 'descripcion',
            // 'vigente',
            // 'vigencia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
