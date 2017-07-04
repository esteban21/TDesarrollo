<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvModalidadColaboracionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-modalidad-colaboracion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_MODALIDAD_COLABORACION') ?>

    <?= $form->field($model, 'NOMBRE_MODALIDAD_COLABORACION') ?>

    <?= $form->field($model, 'DESCRIPCION') ?>

    <?= $form->field($model, 'VIGENTE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
