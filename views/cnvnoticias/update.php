<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CnvNoticia */

$this->title = 'Update Cnv Noticia: ' . $model->id_noticia;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_noticia, 'url' => ['view', 'id' => $model->id_noticia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cnv-noticia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
