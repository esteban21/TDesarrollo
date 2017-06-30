<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CnvInstitucionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cnv Institucions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-institucion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cnv Institucion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_TIPO_INSTITUCION',
            'NOMBRE_INSTITUCION',
            'ID_INSTITUCION',
            'ID_PAIS',
            'VIGENTE',
            // 'ID_INTERNACIONAL',
            // 'RUT_INSTITUCION',
            // 'RAZON_SOCIAL_INSTITUCION',
            // 'DIRECCION_INSTITUCION',
            // 'TELEFONO_INSTITUCION',
            // 'EMAIL_INSTITUCION:email',
            // 'LINK_INSTITUCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
