<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\TerminateOapiDingpayOrderResponseBody\result;

use AlibabaCloud\Tea\Model;

class terminateResult extends Model {
    protected $_name = [
        'orderNo' => 'order_no',
        'terminated' => 'terminated',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->orderNo) {
            $res['order_no'] = $this->orderNo;
        }
        if (null !== $this->terminated) {
            $res['terminated'] = $this->terminated;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return terminateResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['order_no'])){
            $model->orderNo = $map['order_no'];
        }
        if(isset($map['terminated'])){
            $model->terminated = $map['terminated'];
        }
        return $model;
    }
    /**
     * @description 订单号
     * @var string
     */
    public $orderNo;

    /**
     * @description 是否终止
     * @var bool
     */
    public $terminated;

}
