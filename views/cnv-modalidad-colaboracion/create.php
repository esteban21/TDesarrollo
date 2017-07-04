<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvModalidadColaboracion */

$this->title = 'Create Cnv Modalidad Colaboracion';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Modalidad Colaboracions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-modalidad-colaboracion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
