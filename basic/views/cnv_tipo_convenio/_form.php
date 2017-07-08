<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cnv_tipo_convenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-tipo-convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tipo_convenio')->textInput() ?>

    <?= $form->field($model, 'nombre_tipo_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nemonico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vigente')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
