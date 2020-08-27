<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CapacityOapiCateringDeductParams extends Model {
    protected $_name = [
        'meaTime' => 'mea_time',
        'orderid' => 'orderid',
        'orderFullAmount' => 'order_full_amount',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('meaTime', $this->meaTime, true);
        Model::validateRequired('orderFullAmount', $this->orderFullAmount, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->meaTime) {
            $res['mea_time'] = $this->meaTime;
        }
        if (null !== $this->orderid) {
            $res['orderid'] = $this->orderid;
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
     * @return CapacityOapiCateringDeductParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['mea_time'])){
            $model->meaTime = $map['mea_time'];
        }
        if(isset($map['orderid'])){
            $model->orderid = $map['orderid'];
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
     * @description 用餐时间
     * @var int
     */
    public $meaTime;

    /**
     * @description 订单id
     * @var string
     */
    public $orderid;

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
