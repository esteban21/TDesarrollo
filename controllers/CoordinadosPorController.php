<?php

namespace app\controllers;

use Yii;
use app\models\CoordinadosPor;
use app\models\CoordinadosPorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CoordinadosPorController implements the CRUD actions for CoordinadosPor model.
 */
class CoordinadosPorController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all CoordinadosPor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CoordinadosPorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CoordinadosPor model.
     * @param integer $id_convenio
     * @param string $id_coordinador_convenio
     * @return mixed
     */
    public function actionView($id_convenio, $id_coordinador_convenio)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_convenio, $id_coordinador_convenio),
        ]);
    }

    /**
     * Creates a new CoordinadosPor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CoordinadosPor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_convenio' => $model->id_convenio, 'id_coordinador_convenio' => $model->id_coordinador_convenio]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CoordinadosPor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_convenio
     * @param string $id_coordinador_convenio
     * @return mixed
     */
    public function actionUpdate($id_convenio, $id_coordinador_convenio)
    {
        $model = $this->findModel($id_convenio, $id_coordinador_convenio);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_convenio' => $model->id_convenio, 'id_coordinador_convenio' => $model->id_coordinador_convenio]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CoordinadosPor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_convenio
     * @param string $id_coordinador_convenio
     * @return mixed
     */
    public function actionDelete($id_convenio, $id_coordinador_convenio)
    {
        $this->findModel($id_convenio, $id_coordinador_convenio)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CoordinadosPor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_convenio
     * @param string $id_coordinador_convenio
     * @return CoordinadosPor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_convenio, $id_coordinador_convenio)
    {
        if (($model = CoordinadosPor::findOne(['id_convenio' => $id_convenio, 'id_coordinador_convenio' => $id_coordinador_convenio])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
