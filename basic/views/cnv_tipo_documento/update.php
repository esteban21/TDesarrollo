<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cnv_tipo_documento */

$this->title = 'Update Cnv Tipo Documento: ' . $model->ID_TIPO_DOCUMENTO;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Tipo Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_TIPO_DOCUMENTO, 'url' => ['view', 'id' => $model->ID_TIPO_DOCUMENTO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-tipo-documento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
