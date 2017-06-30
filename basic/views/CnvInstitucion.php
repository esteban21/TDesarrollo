<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvInstitucion */
/* @var $form ActiveForm */
?>
<div class="CnvInstitucion">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ID_TIPO_INSTITUCION') ?>
        <?= $form->field($model, 'NOMBRE_INSTITUCION') ?>
        <?= $form->field($model, 'ID_INSTITUCION') ?>
        <?= $form->field($model, 'ID_PAIS') ?>
        <?= $form->field($model, 'RAZON_SOCIAL_INSTITUCION') ?>
        <?= $form->field($model, 'DIRECCION_INSTITUCION') ?>
        <?= $form->field($model, 'VIGENTE') ?>
        <?= $form->field($model, 'ID_INTERNACIONAL') ?>
        <?= $form->field($model, 'RUT_INSTITUCION') ?>
        <?= $form->field($model, 'TELEFONO_INSTITUCION') ?>
        <?= $form->field($model, 'EMAIL_INSTITUCION') ?>
        <?= $form->field($model, 'LINK_INSTITUCION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- CnvInstitucion -->
