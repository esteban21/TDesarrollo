<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CoordinadosPor */

$this->title = 'Create Coordinados Por';
$this->params['breadcrumbs'][] = ['label' => 'Coordinados Pors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinados-por-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
