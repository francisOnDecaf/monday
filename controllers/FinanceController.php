<?php

namespace app\controllers;

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
            'finances' => $finances,
            'pagination' => $pagination,
        ]);
    }
}