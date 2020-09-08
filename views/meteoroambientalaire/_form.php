<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Meteoroambientalaire */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meteoroambientalaire-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'hora')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempAmbC')->textInput() ?>

    <?= $form->field($model, 'Humedad')->textInput() ?>

    <?= $form->field($model, 'MSNM')->textInput() ?>

    <?= $form->field($model, 'tempPatmos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patmosSnm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TempCenInt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VoltajeCo')->textInput() ?>

    <?= $form->field($model, 'RadioCo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PPMCo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VoltajeOzono')->textInput() ?>

    <?= $form->field($model, 'RadioOzono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PPMOzono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VoltajeCO2Presente')->textInput() ?>

    <?= $form->field($model, 'VoltajeO3Presente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Reservado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VoltajeParticulas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DensidadPart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PPMpercf')->textInput() ?>

    <?= $form->field($model, 'IPEstacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
