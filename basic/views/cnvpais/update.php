<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cnvpais */

$this->title = 'Update Cnvpais: ' . $model->ID_PAIS;
$this->params['breadcrumbs'][] = ['label' => 'Cnvpais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_PAIS, 'url' => ['view', 'id' => $model->ID_PAIS]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnvpais-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
