<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvAreaConvenio */

$this->title = 'Update Cnv Area Convenio: ' . $model->id_area_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Area Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_area_convenio, 'url' => ['view', 'id' => $model->id_area_convenio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-area-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
