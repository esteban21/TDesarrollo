<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvAreaConvenio */

$this->title = 'Create Cnv Area Convenio';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Area Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-area-convenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
