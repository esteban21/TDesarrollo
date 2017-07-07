<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvEstadoActividad */

$this->title = 'Create Cnv Estado Actividad';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Estado Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-estado-actividad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
