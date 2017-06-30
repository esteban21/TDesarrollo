<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvInstitucionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-institucion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_TIPO_INSTITUCION') ?>

    <?= $form->field($model, 'NOMBRE_INSTITUCION') ?>

    <?= $form->field($model, 'ID_INSTITUCION') ?>

    <?= $form->field($model, 'ID_PAIS') ?>

    <?= $form->field($model, 'VIGENTE') ?>

    <?php // echo $form->field($model, 'ID_INTERNACIONAL') ?>

    <?php // echo $form->field($model, 'RUT_INSTITUCION') ?>

    <?php // echo $form->field($model, 'RAZON_SOCIAL_INSTITUCION') ?>

    <?php // echo $form->field($model, 'DIRECCION_INSTITUCION') ?>

    <?php // echo $form->field($model, 'TELEFONO_INSTITUCION') ?>

    <?php // echo $form->field($model, 'EMAIL_INSTITUCION') ?>

    <?php // echo $form->field($model, 'LINK_INSTITUCION') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
