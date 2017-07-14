<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvObjetivoConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Objetivo Convenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-objetivo-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Objetivo Convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_objetivo_convenio',
            'texto_objetivo',
            'vigente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
