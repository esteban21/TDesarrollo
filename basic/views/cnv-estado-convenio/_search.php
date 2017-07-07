<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvEstadoConvenioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-estado-convenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_estado_convenio') ?>

    <?= $form->field($model, 'nombre_estado_convenio') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'vigente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
