<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CnvCoordinadorConvenio */

$this->title = $model->ID_COORDINADOR_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Coordinador Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-coordinador-convenio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_COORDINADOR_CONVENIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_COORDINADOR_CONVENIO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_COORDINADOR_CONVENIO',
            'RUT_COORDINADOR_CONVENIO',
            'NOMBRE_COORDINADOR_CONVENIO',
            'DV_COORDINADOR_CONVENIO',
            'FECHA_INICIO',
            'FECHA_FIN',
            'VIGENTE',
            'ESEXTERNO',
            'UNIDAD_ACADEMICA',
            'EMAIL:email',
            'ID_INSTITUCION',
        ],
    ]) ?>

</div>
