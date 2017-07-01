<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cnvpais */

$this->title = 'Crear Pais';
$this->params['breadcrumbs'][] = ['label' => 'Cnvpais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnvpais-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
