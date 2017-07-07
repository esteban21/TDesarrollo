<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvEstadoActividad */

$this->title = 'Update Cnv Estado Actividad: ' . $model->id_estado_actividad;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Estado Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_estado_actividad, 'url' => ['view', 'id' => $model->id_estado_actividad]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-estado-actividad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
