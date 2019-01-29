<?php

namespace app\controllers;

use Yii;

class StepsController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $query = new \yii\db\Query();

        $query->select(['steps.step_name AS title', 'COUNT(people.step_id) AS value'])
            ->from('steps')
            ->join('INNER JOIN',
                'people',
                'people.step_id = steps.step'
            )->groupBy('people.step_id');
        $command = $query->createCommand();
        $data = $command->queryAll();

        $request = Yii::$app->request;

        if ($request->isPost) {
            print_r(json_encode($data));
        } else {
            echo '<pre />';
            print_r($data);
        }
        exit;
    }

}
