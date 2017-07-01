<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvpaisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnvpais-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_PAIS') ?>

    <?= $form->field($model, 'NOMBRE_PAIS') ?>

    <?= $form->field($model, 'CODIGO_PAIS') ?>

    <?= $form->field($model, 'VIGENTE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
