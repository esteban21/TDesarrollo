<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvTipoInstitucion */

$this->title = 'Update Cnv Tipo Institucion: ' . $model->id_tipo_institucion;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Tipo Institucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipo_institucion, 'url' => ['view', 'id' => $model->id_tipo_institucion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-tipo-institucion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
