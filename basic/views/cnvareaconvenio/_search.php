<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvareaconvenioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-area-convenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_area_convenio') ?>

    <?= $form->field($model, 'nombre_area_convenio') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'vigente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
