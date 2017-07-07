<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvTipoActividad */

$this->title = 'Update Cnv Tipo Actividad: ' . $model->id_tipo_actividad;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Tipo Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipo_actividad, 'url' => ['view', 'id' => $model->id_tipo_actividad]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-tipo-actividad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
