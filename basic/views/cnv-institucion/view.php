<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CnvInstitucion */

$this->title = $model->ID_INSTITUCION;
$this->params['breadcrumbs'][] = ['label' => 'Cnv Institucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cnv-institucion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_INSTITUCION], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_INSTITUCION], [
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
            'ID_TIPO_INSTITUCION',
            'NOMBRE_INSTITUCION',
            'ID_INSTITUCION',
            'ID_PAIS',
            'VIGENTE',
            'ID_INTERNACIONAL',
            'RUT_INSTITUCION',
            'RAZON_SOCIAL_INSTITUCION',
            'DIRECCION_INSTITUCION',
            'TELEFONO_INSTITUCION',
            'EMAIL_INSTITUCION:email',
            'LINK_INSTITUCION',
        ],
    ]) ?>

</div>
