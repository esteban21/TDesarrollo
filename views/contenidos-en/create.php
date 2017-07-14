<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ContenidosEn */

$this->title = 'Create Contenidos En';
$this->params['breadcrumbs'][] = ['label' => 'Contenidos Ens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contenidos-en-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
