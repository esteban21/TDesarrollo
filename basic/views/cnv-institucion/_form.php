<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvInstitucion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-institucion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_TIPO_INSTITUCION')->textInput() ?>

    <?= $form->field($model, 'NOMBRE_INSTITUCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_INSTITUCION')->textInput() ?>

    <?= $form->field($model, 'ID_PAIS')->textInput() ?>

    <?= $form->field($model, 'VIGENTE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_INTERNACIONAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUT_INSTITUCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RAZON_SOCIAL_INSTITUCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIRECCION_INSTITUCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONO_INSTITUCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL_INSTITUCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LINK_INSTITUCION')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
