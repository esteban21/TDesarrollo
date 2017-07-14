<?php

namespace app\controllers;

use Yii;
use app\models\ContenidosEn;
use app\models\ContenidosEnSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContenidosEnController implements the CRUD actions for ContenidosEn model.
 */
class ContenidosEnController extends Controller
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
     * Lists all ContenidosEn models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContenidosEnSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ContenidosEn model.
     * @param integer $id_convenio
     * @param integer $id_area_convenio
     * @return mixed
     */
    public function actionView($id_convenio, $id_area_convenio)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_convenio, $id_area_convenio),
        ]);
    }

    /**
     * Creates a new ContenidosEn model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ContenidosEn();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_convenio' => $model->id_convenio, 'id_area_convenio' => $model->id_area_convenio]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ContenidosEn model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_convenio
     * @param integer $id_area_convenio
     * @return mixed
     */
    public function actionUpdate($id_convenio, $id_area_convenio)
    {
        $model = $this->findModel($id_convenio, $id_area_convenio);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_convenio' => $model->id_convenio, 'id_area_convenio' => $model->id_area_convenio]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ContenidosEn model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_convenio
     * @param integer $id_area_convenio
     * @return mixed
     */
    public function actionDelete($id_convenio, $id_area_convenio)
    {
        $this->findModel($id_convenio, $id_area_convenio)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ContenidosEn model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_convenio
     * @param integer $id_area_convenio
     * @return ContenidosEn the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_convenio, $id_area_convenio)
    {
        if (($model = ContenidosEn::findOne(['id_convenio' => $id_convenio, 'id_area_convenio' => $id_area_convenio])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
