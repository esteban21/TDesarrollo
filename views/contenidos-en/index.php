<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContenidosEnSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contenidos Ens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contenidos-en-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contenidos En', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_convenio',
            'id_area_convenio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
