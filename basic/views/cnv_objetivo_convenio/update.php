<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cnv_objetivo_convenio */

$this->title = 'Update Cnv Objetivo Convenio: ' . $model->id_objetivo_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Objetivo Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_objetivo_convenio, 'url' => ['view', 'id' => $model->id_objetivo_convenio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-objetivo-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
