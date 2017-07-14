<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CoordinadosPor */

$this->title = $model->id_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Coordinados Pors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinados-por-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_convenio' => $model->id_convenio, 'id_coordinador_convenio' => $model->id_coordinador_convenio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_convenio' => $model->id_convenio, 'id_coordinador_convenio' => $model->id_coordinador_convenio], [
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
            'id_convenio',
            'id_coordinador_convenio',
        ],
    ]) ?>

</div>
