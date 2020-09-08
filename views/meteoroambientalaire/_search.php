<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MeteoroambientalaireSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meteoroambientalaire-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'hora') ?>

    <?= $form->field($model, 'tempAmbC') ?>

    <?= $form->field($model, 'Humedad') ?>

    <?= $form->field($model, 'MSNM') ?>

    <?php // echo $form->field($model, 'tempPatmos') ?>

    <?php // echo $form->field($model, 'patmosSnm') ?>

    <?php // echo $form->field($model, 'TempCenInt') ?>

    <?php // echo $form->field($model, 'VoltajeCo') ?>

    <?php // echo $form->field($model, 'RadioCo') ?>

    <?php // echo $form->field($model, 'PPMCo') ?>

    <?php // echo $form->field($model, 'VoltajeOzono') ?>

    <?php // echo $form->field($model, 'RadioOzono') ?>

    <?php // echo $form->field($model, 'PPMOzono') ?>

    <?php // echo $form->field($model, 'VoltajeCO2Presente') ?>

    <?php // echo $form->field($model, 'VoltajeO3Presente') ?>

    <?php // echo $form->field($model, 'Reservado') ?>

    <?php // echo $form->field($model, 'VoltajeParticulas') ?>

    <?php // echo $form->field($model, 'DensidadPart') ?>

    <?php // echo $form->field($model, 'PPMpercf') ?>

    <?php // echo $form->field($model, 'IPEstacion') ?>

    <?php // echo $form->field($model, 'entryID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
