<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvActividadConvenio */

$this->title = 'Update Cnv Actividad Convenio: ' . $model->id_actividad_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Actividad Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_actividad_convenio, 'url' => ['view', 'id' => $model->id_actividad_convenio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-actividad-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
