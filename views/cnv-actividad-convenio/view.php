<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CnvActividadConvenio */

$this->title = $model->id_actividad_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Actividad Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-actividad-convenio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_actividad_convenio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_actividad_convenio], [
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
            'id_actividad_convenio',
            'id_tipo_actividad',
            'id_responsable_actividad',
            'id_estado_actividad',
            'fecha_inicio',
            'fecha_fin',
            'nombre_actividad',
            'descripcion',
            'vigente',
        ],
    ]) ?>

</div>
