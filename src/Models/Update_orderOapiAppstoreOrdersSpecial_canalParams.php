<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Update_orderOapiAppstoreOrdersSpecial_canalParams extends Model {
    protected $_name = [
        'dingOrderId' => 'ding_order_id',
        'status' => 'status',
    ];
    public function validate() {
        Model::validateRequired('dingOrderId', $this->dingOrderId, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->dingOrderId) {
            $res['ding_order_id'] = $this->dingOrderId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Update_orderOapiAppstoreOrdersSpecial_canalParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ding_order_id'])){
            $model->dingOrderId = $map['ding_order_id'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 钉钉订单id
     * @var string
     */
    public $dingOrderId;

    /**
     * @description 状态。已支付是3，已完成是4，已取消是1
     * @var int
     */
    public $status;

}
