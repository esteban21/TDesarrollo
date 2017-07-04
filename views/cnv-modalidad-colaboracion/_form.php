<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvModalidadColaboracion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-modalidad-colaboracion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_MODALIDAD_COLABORACION')->textInput() ?>

    <?= $form->field($model, 'NOMBRE_MODALIDAD_COLABORACION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENTE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
