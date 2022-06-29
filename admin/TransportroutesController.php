<?php

namespace app\modules\fee\controllers;

use Yii;
use app\modules\fee\models\TransportRoutes;
use app\modules\fee\models\SearchTransportRoutes;
use app\modules\fee\models\AddTransportRoutes;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TransportroutesController implements the CRUD actions for TransportRoutes model.
 */
class TransportroutesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
			'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'view', 'create', 'update', 'delete'],
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->identity->role == 'School Admin';
                        },
                        'denyCallback' => function ($rule, $action) {
							throw new \yii\web\ForbiddenHttpException('You are not authorized to access this page.');
						}
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TransportRoutes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new AddTransportRoutes();
		$searchModel = new SearchTransportRoutes();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model->num_routes = $dataProvider->totalCount;

     	if ($model->load(Yii::$app->request->post())) {
			$status = $model->updateTransportRoutes();
			if ($status == AddTransportRoutes::ROUTE_UPDATE_NONE) {
				Yii::$app->uihelper->setSessionFlash(787);
			} else if ($status == AddTransportRoutes::ROUTE_UPDATE_FAILED) {
				Yii::$app->uihelper->setSessionFlash(788);
			} else {
				Yii::$app->uihelper->setSessionFlash(789);
			}
		}
		
		return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);	
    }

    /**
     * Displays a single TransportRoutes model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
		if (Yii::$app->request->isAjax) {
            return $this->renderAjax('view', ['model' => $this->findModel($id),]);
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TransportRoutes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TransportRoutes();
        $model->year = app\modules\school\models\AcademicYear::getAcademicYear();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			Yii::$app->uihelper->setSessionFlash(772);
            if(Yii::$app->request->isAjax) {
                return $this->renderAjax('view', ['model' => $model]);
            }
            return $this->render('view', ['model' => $model]);
        } else if (Yii::$app->request->post()) {
			Yii::$app->uihelper->setSessionFlash(771);
		}

        if (Yii::$app->request->isAjax) {
           return $this->renderAjax('create', ['model' => $model,]);
        }

        return $this->render('create', ['model' => $model, ]);
    }

    /**
     * Updates an existing TransportRoutes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			Yii::$app->uihelper->setSessionFlash(772);
            if(Yii::$app->request->isAjax) {
                return $this->renderAjax('view', ['model' => $model]);
            }
            return $this->render('view', ['model' => $model]);
        } else if (Yii::$app->request->post()) {
			Yii::$app->uihelper->setSessionFlash(771);
		}

        if (Yii::$app->request->isAjax) {
           return $this->renderAjax('update', ['model' => $model,]);
        }
        
        return $this->render('update', ['model' => $model,]);
    }

    /**
     * Deletes an existing TransportRoutes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TransportRoutes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TransportRoutes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TransportRoutes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
