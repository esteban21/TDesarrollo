<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvCoordinadorConvenio */

$this->title = 'Update Cnv Coordinador Convenio: ' . $model->ID_COORDINADOR_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Coordinador Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_COORDINADOR_CONVENIO, 'url' => ['view', 'id' => $model->ID_COORDINADOR_CONVENIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-coordinador-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
