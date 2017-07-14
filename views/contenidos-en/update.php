<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContenidosEn */

$this->title = 'Update Contenidos En: ' . $model->id_convenio;
$this->params['breadcrumbs'][] = ['label' => 'Contenidos Ens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_convenio, 'url' => ['view', 'id_convenio' => $model->id_convenio, 'id_area_convenio' => $model->id_area_convenio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contenidos-en-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
