<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Meteoroambientalaire;

/**
 * MeteoroambientalaireSearch represents the model behind the search form of `app\models\Meteoroambientalaire`.
 */
class MeteoroambientalaireSearch extends Meteoroambientalaire
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'hora', 'IPEstacion'], 'safe'],
            [['tempAmbC', 'Humedad', 'MSNM', 'VoltajeCo', 'VoltajeOzono', 'VoltajeCO2Presente', 'PPMpercf', 'entryID'], 'integer'],
            [['tempPatmos', 'patmosSnm', 'TempCenInt', 'RadioCo', 'PPMCo', 'RadioOzono', 'PPMOzono', 'VoltajeO3Presente', 'Reservado', 'VoltajeParticulas', 'DensidadPart'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Meteoroambientalaire::find();

        // add conditions that should always apply here
        $query->select(["fecha","EXTRACT(hour from hora) hora", 'AVG(tempAmbC) tempAmbC', "AVG(Humedad) Humedad","AVG(PPMCo) PPMCo","AVG(PPMOzono) PPMOzono","AVG(DensidadPart) DensidadPart",'IPEstacion'])->groupBy("EXTRACT(hour from hora)");
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'fecha' => $this->fecha,
            'tempAmbC' => $this->tempAmbC,
            'Humedad' => $this->Humedad,
            'MSNM' => $this->MSNM,
            'tempPatmos' => $this->tempPatmos,
            'patmosSnm' => $this->patmosSnm,
            'TempCenInt' => $this->TempCenInt,
            'VoltajeCo' => $this->VoltajeCo,
            'RadioCo' => $this->RadioCo,
            'PPMCo' => $this->PPMCo,
            'VoltajeOzono' => $this->VoltajeOzono,
            'RadioOzono' => $this->RadioOzono,
            'PPMOzono' => $this->PPMOzono,
            'VoltajeCO2Presente' => $this->VoltajeCO2Presente,
            'VoltajeO3Presente' => $this->VoltajeO3Presente,
            'Reservado' => $this->Reservado,
            'VoltajeParticulas' => $this->VoltajeParticulas,
            'DensidadPart' => $this->DensidadPart,
            'PPMpercf' => $this->PPMpercf,
            'entryID' => $this->entryID,
        ]);

        $query->andFilterWhere(['like', 'hora', $this->hora])
            ->andFilterWhere(['like', 'IPEstacion', $this->IPEstacion]);

        return $dataProvider;
    }
}
