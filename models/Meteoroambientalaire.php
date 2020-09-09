<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meteoroambientalaire".
 *
 * @property string $fecha
 * @property int|null $tempAmbC
 * @property int|null $Humedad
 * @property int|null $MSNM
 * @property float|null $tempPatmos
 * @property float|null $patmosSnm
 * @property float|null $TempCenInt
 * @property int|null $VoltajeCo
 * @property float|null $RadioCo
 * @property float|null $PPMCo
 * @property int|null $VoltajeOzono
 * @property float|null $RadioOzono
 * @property float|null $PPMOzono
 * @property int|null $VoltajeCO2Presente
 * @property float|null $VoltajeO3Presente
 * @property float|null $Reservado
 * @property float|null $VoltajeParticulas
 * @property float|null $DensidadPart
 * @property int|null $PPMpercf
 * @property string|null $IPEstacion
 * @property int $entryID
 */
class Meteoroambientalaire extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datos_arduino';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha'], 'required'],
            [['fecha'], 'safe'],
            [['tempAmbC', 'Humedad', 'MSNM', 'VoltajeCo', 'VoltajeOzono', 'VoltajeCO2Presente', 'PPMpercf'], 'integer'],
            [['tempPatmos', 'patmosSnm','TempCenInt', 'RadioCo', 'PPMCo', 'RadioOzono', 'PPMOzono', 'VoltajeO3Presente', 'Reservado', 'VoltajeParticulas', 'DensidadPart'], 'number'],
            [['arduino_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fecha' => 'Fecha',
            'tempAmbC' => 'Temp Amb C',
            'Humedad' => 'Humedad',
            'MSNM' => 'Msnm',
            'tempPatmos' => 'Temp Patmos',
            'patmosSnm' => 'Patmos Snm',
            'TempCenInt' => 'Temp Cen Int',
            'VoltajeCo' => 'Voltaje Co',
            'RadioCo' => 'Radio Co',
            'PPMCo' => 'Ppm Co',
            'VoltajeOzono' => 'Voltaje Ozono',
            'RadioOzono' => 'Radio Ozono',
            'PPMOzono' => 'Ppm Ozono',
            'VoltajeCO2Presente' => 'Voltaje Co2 Presente',
            'VoltajeO3Presente' => 'Voltaje O3 Presente',
            'Reservado' => 'Reservado',
            'VoltajeParticulas' => 'Voltaje Particulas',
            'DensidadPart' => 'Densidad Part',
            'PPMpercf' => 'Pp Mpercf',
            'arduino_id' => 'Arduino Id',
            'entryID' => 'Entry ID',
        ];
    }
}
