<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvCoordinadorConvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-coordinador-convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_COORDINADOR_CONVENIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUT_COORDINADOR_CONVENIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRE_COORDINADOR_CONVENIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DV_COORDINADOR_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'FECHA_INICIO')->textInput() ?>

    <?= $form->field($model, 'FECHA_FIN')->textInput() ?>

    <?= $form->field($model, 'VIGENTE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESEXTERNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UNIDAD_ACADEMICA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_INSTITUCION')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
