<?php

namespace app\controllers;

use Yii;
use app\models\Meteoroambientalaire;
use app\models\MeteoroambientalaireSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MeteoroambientalaireController implements the CRUD actions for Meteoroambientalaire model.
 */
class MeteoroambientalaireController extends Controller
{

    public function beforeAction($action)
    {            
        if ($action->id == 'test') {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    public function actionTest(){
        if(sizeof($_POST)){
            $file = fopen("post_test.txt", "a");
            $string = (new \DateTime())->format("Y-m-d H:i:s") . "<br>";
            foreach($_POST as $key => $potato){
                $string .= $key . " = " . $potato . "<br>";
            }
            fwrite($file, $string);
            fclose($file);
        }
        else{
            $file = fopen("post_test.txt", "r") or die("No se ha subido nada");
            while(!feof($file)){
                echo fgets($file);
            }
            fclose($file);
        }
    }

    public function actionFormat(){
        $data = Meteoroambientalaire::find()->where(["<>","hora","NN"])->all();
        foreach($data as $model){
            $model->fecha = substr($model->fecha,0,10) . " " . $model->hora . ":00";
            $model->hora = "NN";
            if($model->save()){
                echo "done<br>";
            }
            else{
                print_r($model->getErrors());
                die();
            }
        }
        echo "done";
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Meteoroambientalaire models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MeteoroambientalaireSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Meteoroambientalaire model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Meteoroambientalaire model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Meteoroambientalaire();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->entryID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Meteoroambientalaire model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->entryID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Meteoroambientalaire model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Meteoroambientalaire model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Meteoroambientalaire the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Meteoroambientalaire::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
