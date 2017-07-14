<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CoordinadosPor */

$this->title = 'Update Coordinados Por: ' . $model->id_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Coordinados Pors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_convenio, 'url' => ['view', 'id_convenio' => $model->id_convenio, 'id_coordinador_convenio' => $model->id_coordinador_convenio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coordinados-por-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
