<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CnvNoticiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cnv-noticia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_noticia') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'cuerpo') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'url_imagen') ?>

    <?php // echo $form->field($model, 'vigente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
