<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvTipoActividad */

$this->title = 'Create Cnv Tipo Actividad';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Tipo Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-tipo-actividad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
