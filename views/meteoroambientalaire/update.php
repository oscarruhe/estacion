<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Meteoroambientalaire */

$this->title = 'Update Meteoroambientalaire: ' . $model->entryID;
$this->params['breadcrumbs'][] = ['label' => 'Meteoroambientalaires', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->entryID, 'url' => ['view', 'id' => $model->entryID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="meteoroambientalaire-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
