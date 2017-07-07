<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvtipoinstitucionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eliminar Tipo de Institucion';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-tipo-institucion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'descripcion',
            'id_tipo_institucion',
            'vigente',

            ['class' => 'yii\grid\ActionColumn','template' => '{delete} '],
        ],
    ]); ?>
</div>
