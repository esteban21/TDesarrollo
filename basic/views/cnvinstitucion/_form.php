<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvInstitucion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-institucion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_institucion')->textInput() ?>

    <?= $form->field($model, 'id_pais')->dropDownList($model->comboCnvpais)?>

    <?= $form->field($model, 'id_tipo_institucion')->dropDownList($model->comboCnvtipoinstitucion) ?>

    <?= $form->field($model, 'vigente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rut_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'razon_social_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_institucion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
