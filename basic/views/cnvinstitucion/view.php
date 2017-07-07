<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CnvInstitucion */

$this->title = $model->id_institucion;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Institucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-institucion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->id_institucion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_institucion], [
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
            'nombre_institucion',
            'id_institucion',
            'id_pais',
            'id_tipo_institucion',
            'vigente',
            'rut_institucion',
            'razon_social_institucion',
            'direccion_institucion',
            'telefono_institucion',
            'email_institucion:email',
            'link_institucion',
        ],
    ]) ?>

</div>
