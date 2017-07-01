<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvCoordinadorConvenio */
/* @var $form ActiveForm */
?>
<div class="CnvCoordinadorConvenio">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_coordinador_convenio') ?>
        <?= $form->field($model, 'dv_coordinador_convenio') ?>
        <?= $form->field($model, 'id_institucion') ?>
        <?= $form->field($model, 'fecha_inicio') ?>
        <?= $form->field($model, 'fecha_fin') ?>
        <?= $form->field($model, 'rut_coordinador_convenio') ?>
        <?= $form->field($model, 'nombre_coordinador_convenio') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'vigente') ?>
        <?= $form->field($model, 'esexterno') ?>
        <?= $form->field($model, 'unidad_academica') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- CnvCoordinadorConvenio -->
