<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoordinadosPorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coordinados Por';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinados-por-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Coordinados Por', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_convenio',
            'id_coordinador_convenio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
