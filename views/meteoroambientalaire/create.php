<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Meteoroambientalaire */

$this->title = 'Create Meteoroambientalaire';
$this->params['breadcrumbs'][] = ['label' => 'Meteoroambientalaires', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meteoroambientalaire-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
