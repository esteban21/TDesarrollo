<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvEstadoConvenio */

$this->title = 'Create Cnv Estado Convenio';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Estado Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-estado-convenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
