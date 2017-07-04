<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvCoordinadorConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnv Coordinador Convenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-coordinador-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cnv Coordinador Convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_COORDINADOR_CONVENIO',
            'RUT_COORDINADOR_CONVENIO',
            'NOMBRE_COORDINADOR_CONVENIO',
            'DV_COORDINADOR_CONVENIO',
            'FECHA_INICIO',
            // 'FECHA_FIN',
            // 'VIGENTE',
            // 'ESEXTERNO',
            // 'UNIDAD_ACADEMICA',
            // 'EMAIL:email',
            // 'ID_INSTITUCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
