<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Order;
use common\models\User;

/**
 * Site controller
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
        $Orders = Order::find()->all();
        $Users = User::find()->all();

        return $this->render('lista',[
            'Orders'=>$Orders,
            'Users'=>$Users
        ]);
    }
}