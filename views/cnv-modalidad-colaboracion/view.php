<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CnvModalidadColaboracion */

$this->title = $model->ID_MODALIDAD_COLABORACION;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Modalidad Colaboracions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-modalidad-colaboracion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_MODALIDAD_COLABORACION], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_MODALIDAD_COLABORACION], [
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
            'ID_MODALIDAD_COLABORACION',
            'NOMBRE_MODALIDAD_COLABORACION',
            'DESCRIPCION',
            'VIGENTE',
        ],
    ]) ?>

</div>
