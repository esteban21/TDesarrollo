<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cnv_tipo_documento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-tipo-documento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_TIPO_DOCUMENTO')->textInput() ?>

    <?= $form->field($model, 'NOMBRE_TIPO_DOCUMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENTE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
