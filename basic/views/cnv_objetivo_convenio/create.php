<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cnv_objetivo_convenio */

$this->title = 'Create Cnv Objetivo Convenio';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Objetivo Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-objetivo-convenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
