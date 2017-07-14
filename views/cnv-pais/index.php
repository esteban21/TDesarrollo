<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvPaisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-pais-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Pais', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pais',
            'nombre_pais',
            'codigo_pais',
            'vigente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
