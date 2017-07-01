<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvpaisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista de Paises';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnvpais-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_PAIS',
            'NOMBRE_PAIS',
            'CODIGO_PAIS',
            'VIGENTE',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
