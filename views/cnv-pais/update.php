<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvPais */

$this->title = 'Update Cnv Pais: ' . $model->id_pais;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Pais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pais, 'url' => ['view', 'id' => $model->id_pais]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-pais-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
