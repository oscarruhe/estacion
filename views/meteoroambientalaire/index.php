<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
$this->title = 'Meteoroambientalaires';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meteoroambientalaire-index">

    <h1><?= Html::encode($this->title) ?></h1>

   
    <?= ExportMenu::widget([
        'exportConfig'=>[
            ExportMenu::FORMAT_HTML => false,
            ExportMenu::FORMAT_CSV => ['label' => "CSV",'icon' => 'glyphicon glyphicon-floppy-save','iconOptions' => ['class' => 'text-primary'],'linkOptions' => [],'options' => ['title' => 'Textos separados por comas'],'alertMsg' => 'Se generará de manera automática en formato: CSV. Oprimir el botón "OK" para continuar (esta operación puede demorar unos segundos).','mime' => 'application/csv','extension' => 'csv','writer' => ExportMenu::FORMAT_CSV],
            ExportMenu::FORMAT_TEXT => false,
            ExportMenu::FORMAT_PDF => false,
            ExportMenu::FORMAT_EXCEL => false,
            ExportMenu::FORMAT_EXCEL_X => false,
        ],
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fecha',
            'hora',
            'tempAmbC',
            'Humedad',
            'PPMCo',
            'PPMOzono',
            'DensidadPart',
        ],
        'dropdownOptions' => [
            'label' => 'Exportar todo',
            'class' => 'btn btn-secondary'
        ]
    ])?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fecha',
            'hora',
            'tempAmbC',
            'Humedad',
            'PPMCo',
            'PPMOzono',
            'DensidadPart',
            [
                'attribute'=>'IPEstacion',
                'filter'=>[
                    '148.210.123.102'=>'IIT',
                    '148.210.123.140'=>'Clinica',
		    '148.210.123.131'=>'AnapraViejo',
		    '148.210.8.36:83'=>'Anapra'
                ]
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
