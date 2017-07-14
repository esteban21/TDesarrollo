<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvPais */

$this->title = 'Create Cnv Pais';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Pais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-pais-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
