<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cnv_tipo_convenio */

$this->title = 'Create Cnv Tipo Convenio';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Tipo Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-tipo-convenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
