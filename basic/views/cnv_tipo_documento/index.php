<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Cnv_tipo_documentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnv Tipo Documentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-tipo-documento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cnv Tipo Documento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_TIPO_DOCUMENTO',
            'NOMBRE_TIPO_DOCUMENTO',
            'DESCRIPCION',
            'VIGENTE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
