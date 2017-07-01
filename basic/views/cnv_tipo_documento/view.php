<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cnv_tipo_documento */

$this->title = $model->ID_TIPO_DOCUMENTO;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Tipo Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-tipo-documento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_TIPO_DOCUMENTO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_TIPO_DOCUMENTO], [
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
            'ID_TIPO_DOCUMENTO',
            'NOMBRE_TIPO_DOCUMENTO',
            'DESCRIPCION',
            'VIGENTE',
        ],
    ]) ?>

</div>
