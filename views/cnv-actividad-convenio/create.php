<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvActividadConvenio */

$this->title = 'Create Cnv Actividad Convenio';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Actividad Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-actividad-convenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
