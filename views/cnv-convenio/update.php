<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvConvenio */

$this->title = 'Update Cnv Convenio: ' . $model->id_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_convenio, 'url' => ['view', 'id' => $model->id_convenio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
