<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvResponsableActividad */

$this->title = 'Update Cnv Responsable Actividad: ' . $model->id_responsable_actividad;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Responsable Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_responsable_actividad, 'url' => ['view', 'id' => $model->id_responsable_actividad]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-responsable-actividad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
