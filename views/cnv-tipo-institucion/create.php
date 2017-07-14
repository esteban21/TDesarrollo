<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvTipoInstitucion */

$this->title = 'Create Cnv Tipo Institucion';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Tipo Institucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-tipo-institucion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
