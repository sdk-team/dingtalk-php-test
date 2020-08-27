<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SyncstatusOapiDingpayOrderParams extends Model {
    protected $_name = [
        'orderNos' => 'order_nos',
    ];
    public function validate() {
        Model::validateRequired('orderNos', $this->orderNos, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->orderNos) {
            $res['order_nos'] = $this->orderNos;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SyncstatusOapiDingpayOrderParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['order_nos'])){
            if(!empty($map['order_nos'])){
                $model->orderNos = $map['order_nos'];
            }
        }
        return $model;
    }
    /**
     * @description 钉支付订单号
     * @var array
     */
    public $orderNos;

}
