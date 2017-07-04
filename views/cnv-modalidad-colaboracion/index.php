<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvModalidadColaboracionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnv Modalidad Colaboracions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-modalidad-colaboracion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cnv Modalidad Colaboracion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_MODALIDAD_COLABORACION',
            'NOMBRE_MODALIDAD_COLABORACION',
            'DESCRIPCION',
            'VIGENTE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
