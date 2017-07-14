<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvTipoConvenio */

$this->title = 'Update Cnv Tipo Convenio: ' . $model->id_tipo_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Tipo Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipo_convenio, 'url' => ['view', 'id' => $model->id_tipo_convenio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-tipo-convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
