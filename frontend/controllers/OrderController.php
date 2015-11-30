<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Order;
use common\models\User;

/**
 * Order controller
 */
class OrderController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionLista()
    {   
        $order = new Order();
        $Orders = $order->getUserandOrders();
         
        return $this->render('lista',[
            'Orders'=>$Orders,
        ]);
    }
}