<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvAreaConvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-area-convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_area_convenio')->textInput() ?>

    <?= $form->field($model, 'nombre_area_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vigente')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
