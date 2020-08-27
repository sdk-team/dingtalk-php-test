<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ApplypayOapiDingpayOrderResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'orderStr' => 'orderStr',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->orderStr) {
            $res['orderStr'] = $this->orderStr;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['orderStr'])){
            $model->orderStr = $map['orderStr'];
        }
        return $model;
    }
    /**
     * @description 收银台需要的订单参数
     * @var string
     */
    public $orderStr;

}
