<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Cnv_objetivo_convenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnv Objetivo Convenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-objetivo-convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cnv Objetivo Convenio', ['create'], ['class' => 'btn btn-success']) ?>
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
