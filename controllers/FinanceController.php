<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Finance;

class FinanceController extends Controller
{
    /**
     * Render the overview of the Finance
     * @link index finance overview
     */
    public function actionIndex()
    {
        $model = new Finance();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) 
        {            
            $model->created_on = date('Y-m-d H:i:s');            
            $model->save();
        }
        
        $query = Finance::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $finances = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
       

        return $this->render('index', [
            'model' => $model,
            'finances' => $finances,
            'pagination' => $pagination,
        ]);
    }

}