<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvCoordinadorConvenio */

$this->title = 'Create Cnv Coordinador Convenio';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Coordinador Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-coordinador-convenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
