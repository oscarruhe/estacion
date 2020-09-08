<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Meteoroambientalaire */

$this->title = $model->entryID;
$this->params['breadcrumbs'][] = ['label' => 'Meteoroambientalaires', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="meteoroambientalaire-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->entryID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->entryID], [
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
            'fecha',
            'hora',
            'tempAmbC',
            'Humedad',
            'MSNM',
            'tempPatmos',
            'patmosSnm',
            'TempCenInt',
            'VoltajeCo',
            'RadioCo',
            'PPMCo',
            'VoltajeOzono',
            'RadioOzono',
            'PPMOzono',
            'VoltajeCO2Presente',
            'VoltajeO3Presente',
            'Reservado',
            'VoltajeParticulas',
            'DensidadPart',
            'PPMpercf',
            'IPEstacion',
            'entryID',
        ],
    ]) ?>

</div>
