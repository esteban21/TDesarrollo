<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cnvpais */

$this->title = $model->ID_PAIS;
$this->params['breadcrumbs'][] = ['label' => 'Cnvpais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnvpais-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_PAIS], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_PAIS], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_PAIS',
            'NOMBRE_PAIS',
            'CODIGO_PAIS',
            'VIGENTE',
        ],
    ]) ?>

</div>
