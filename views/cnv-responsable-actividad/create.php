<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvResponsableActividad */

$this->title = 'Create Cnv Responsable Actividad';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Responsable Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-responsable-actividad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
