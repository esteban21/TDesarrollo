<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvConvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_convenio')->textInput() ?>

    <?= $form->field($model, 'id_tipo_convenio')->textInput() ?>

    <?= $form->field($model, 'id_coordinador_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_estado_convenio')->textInput() ?>

    <?= $form->field($model, 'nombre_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'fecha_termino')->textInput() ?>

    <?= $form->field($model, 'fecha_firma')->textInput() ?>

    <?= $form->field($model, 'fecha_decreto')->textInput() ?>

    <?= $form->field($model, 'numero_decreto')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vigente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vigencia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
