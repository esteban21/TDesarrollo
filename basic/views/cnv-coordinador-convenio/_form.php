<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvCoordinadorConvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-coordinador-convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_coordinador_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rut_coordinador_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_coordinador_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dv_coordinador_convenio')->textInput() ?>

    <?= $form->field($model, 'fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'fecha_fin')->textInput() ?>

    <?= $form->field($model, 'vigente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esexterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unidad_academica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_institucion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
