<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvEstadoConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnv Estado Convenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-estado-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cnv Estado Convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_estado_convenio',
            'nombre_estado_convenio',
            'descripcion',
            'vigente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
