<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cnv_tipo_documento */

$this->title = 'Create Cnv Tipo Documento';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Tipo Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-tipo-documento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
