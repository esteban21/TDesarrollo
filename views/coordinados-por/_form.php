<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoordinadosPor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coordinados-por-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_convenio')->textInput() ?>

    <?= $form->field($model, 'id_coordinador_convenio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
