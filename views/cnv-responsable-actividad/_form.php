<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvResponsableActividad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-responsable-actividad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_responsable_actividad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_responsable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vigente')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
