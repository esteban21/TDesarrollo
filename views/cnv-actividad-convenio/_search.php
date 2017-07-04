<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvActividadConvenioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-actividad-convenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_ESTADO_ACTIVIDAD') ?>

    <?= $form->field($model, 'ID_TIPO_ACTIVIDAD') ?>

    <?= $form->field($model, 'ID_RESPONSABLE_ACTIVIDAD') ?>

    <?= $form->field($model, 'FECHA_INICIO') ?>

    <?= $form->field($model, 'FECHA_FIN') ?>

    <?php // echo $form->field($model, 'ID_ACTIVIDAD_CONVENIO') ?>

    <?php // echo $form->field($model, 'ID_CONVENIO') ?>

    <?php // echo $form->field($model, 'NOMBRE_ACTIVIDAD') ?>

    <?php // echo $form->field($model, 'DESCRIPCION') ?>

    <?php // echo $form->field($model, 'VIGENTE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
