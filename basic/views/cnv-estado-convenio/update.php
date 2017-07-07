<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvEstadoConvenio */

$this->title = 'Update Cnv Estado Convenio: ' . $model->id_estado_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Estado Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_estado_convenio, 'url' => ['view', 'id' => $model->id_estado_convenio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-estado-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
