<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvInstitucion */

$this->title = 'Update Cnv Institucion: ' . $model->ID_INSTITUCION;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Institucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_INSTITUCION, 'url' => ['view', 'id' => $model->ID_INSTITUCION]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-institucion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
