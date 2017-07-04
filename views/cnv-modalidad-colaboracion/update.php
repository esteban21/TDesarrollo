<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvModalidadColaboracion */

$this->title = 'Update Cnv Modalidad Colaboracion: ' . $model->ID_MODALIDAD_COLABORACION;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Modalidad Colaboracions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_MODALIDAD_COLABORACION, 'url' => ['view', 'id' => $model->ID_MODALIDAD_COLABORACION]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-modalidad-colaboracion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
