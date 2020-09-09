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

            'YIR',
            'hora',
            'tempAmbC',
            'Humedad',
            'PPMCo',
            'PPMOzono',
            'DensidadPart',
            'estacion_id',
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
            
            [
                'label' =>"YIR",
                'attribute' => 'YIR',
                'value'=>function($data){
                    //print_r($data);
                    //die();
                    return $data["YIR"];
                }
            ],
            ['attribute'=>'arduino_id'],
            'tempAmbC',
            'Humedad',
            'PPMCo',
            'PPMOzono',
            'DensidadPart',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
