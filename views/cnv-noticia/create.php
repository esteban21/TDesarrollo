<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CnvNoticia */

$this->title = 'Create Cnv Noticia';
$this->params['breadcrumbs'][] = ['label' => 'Cnv Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-noticia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
