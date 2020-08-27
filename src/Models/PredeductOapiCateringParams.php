<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class PredeductOapiCateringParams extends Model {
    protected $_name = [
        'orderid' => 'orderid',
        'mealTime' => 'meal_time',
        'expiryTime' => 'expiry_time',
        'orderFullAmount' => 'order_full_amount',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('orderid', $this->orderid, true);
        Model::validateRequired('mealTime', $this->mealTime, true);
        Model::validateRequired('expiryTime', $this->expiryTime, true);
        Model::validateRequired('orderFullAmount', $this->orderFullAmount, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->orderid) {
            $res['orderid'] = $this->orderid;
        }
        if (null !== $this->mealTime) {
            $res['meal_time'] = $this->mealTime;
        }
        if (null !== $this->expiryTime) {
            $res['expiry_time'] = $this->expiryTime;
        }
        if (null !== $this->orderFullAmount) {
            $res['order_full_amount'] = $this->orderFullAmount;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PredeductOapiCateringParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['orderid'])){
            $model->orderid = $map['orderid'];
        }
        if(isset($map['meal_time'])){
            $model->mealTime = $map['meal_time'];
        }
        if(isset($map['expiry_time'])){
            $model->expiryTime = $map['expiry_time'];
        }
        if(isset($map['order_full_amount'])){
            $model->orderFullAmount = $map['order_full_amount'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 订单id
     * @var string
     */
    public $orderid;

    /**
     * @description 用餐时间
     * @var int
     */
    public $mealTime;

    /**
     * @description 抵扣部分金额的超时时间（毫秒）
     * @var int
     */
    public $expiryTime;

    /**
     * @description 应付金额
     * @var int
     */
    public $orderFullAmount;

    /**
     * @description 点餐人userid
     * @var string
     */
    public $userid;

}
