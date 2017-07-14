<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvPaisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-pais-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pais') ?>

    <?= $form->field($model, 'nombre_pais') ?>

    <?= $form->field($model, 'codigo_pais') ?>

    <?= $form->field($model, 'vigente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
