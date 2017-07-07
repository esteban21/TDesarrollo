<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvInstitucion */

$this->title = 'Crear Institucion';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Institucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-institucion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
