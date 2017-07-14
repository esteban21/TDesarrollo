<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvAreaConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Area Convenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-area-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Area Convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_area_convenio',
            'nombre_area_convenio',
            'descripcion',
            'vigente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
