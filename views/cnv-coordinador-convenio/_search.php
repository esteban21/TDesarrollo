<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvCoordinadorConvenioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-coordinador-convenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_COORDINADOR_CONVENIO') ?>

    <?= $form->field($model, 'RUT_COORDINADOR_CONVENIO') ?>

    <?= $form->field($model, 'NOMBRE_COORDINADOR_CONVENIO') ?>

    <?= $form->field($model, 'DV_COORDINADOR_CONVENIO') ?>

    <?= $form->field($model, 'FECHA_INICIO') ?>

    <?php // echo $form->field($model, 'FECHA_FIN') ?>

    <?php // echo $form->field($model, 'VIGENTE') ?>

    <?php // echo $form->field($model, 'ESEXTERNO') ?>

    <?php // echo $form->field($model, 'UNIDAD_ACADEMICA') ?>

    <?php // echo $form->field($model, 'EMAIL') ?>

    <?php // echo $form->field($model, 'ID_INSTITUCION') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
