<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvConvenio */

$this->title = 'Crear  Convenio';
$this->params['breadcrumbs'][] = ['label' => 'Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-convenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
