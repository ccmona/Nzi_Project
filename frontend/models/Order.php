<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "order".
 *
 * @property integer $order_id
 * @property integer $user_id
 * @property string $date_time
 *
 * @property User $order
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'date_time'], 'required'],
            [['user_id'], 'integer'],
            [['date_time'], 'safe'],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'user_id' => 'User ID',
            'date_time' => 'Date Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(User::className(), ['id' => 'order_id']);
    }
    
    public function getUserandOrders()
    {
        return $this->getDb()->createCommand('SELECT * FROM `order` INNER JOIN user ON `order`.user_id = user.id GROUP BY order_id')->queryAll();
    }
}