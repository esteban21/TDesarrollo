<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContenidosEn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contenidos-en-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_convenio')->textInput() ?>

    <?= $form->field($model, 'id_area_convenio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
