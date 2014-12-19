<?php

namespace app\modules\home\controllers;

use Yii;
use yii\filters\AccessControl;
use app\modules\home\models\TopicForm;
use app\modules\home\models\PostSearch;
use app\models\PostType;

class TopicController extends \app\modules\home\components\Controller
{
    public $defaultAction = 'show';

    public function behaviors()
    {

        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['new'],
                'rules' => [
                    [
                        'actions' => ['new'],
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                ],
            ],
        ];
    }

    public function actionShow()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if ($curPostTypeId = Yii::$app->request->get('pt')) {
            foreach (PostType::findFull() as $item) {
                if ($item->id == $curPostTypeId) {
                    $this->params['currentPostTypeName'] = $item->name;
                    break;
                }
            }
        }

        return $this->render('show', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionNew()
    {
        $model = new TopicForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(Yii::$app->request->cookies->getValue('home/preLink'));
        } else {
            return $this->render('new', [
                'model' => $model,
            ]);
        }
    }
}
