<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cnvpais */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnvpais-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_PAIS')->textInput() ?>

    <?= $form->field($model, 'NOMBRE_PAIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CODIGO_PAIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENTE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
