<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ChangeOapiRhinoSalesOrderCustomInfoStatusParams\salesOrderCustomInfoChangeReq;

class ChangeOapiRhinoSalesOrderCustomInfoStatusParams extends Model {
    protected $_name = [
        'salesOrderCustomInfoChangeReq' => 'sales_order_custom_info_change_req',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->salesOrderCustomInfoChangeReq) {
            $res['sales_order_custom_info_change_req'] = null !== $this->salesOrderCustomInfoChangeReq ? $this->salesOrderCustomInfoChangeReq->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ChangeOapiRhinoSalesOrderCustomInfoStatusParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sales_order_custom_info_change_req'])){
            $model->salesOrderCustomInfoChangeReq = salesOrderCustomInfoChangeReq::fromMap($map['sales_order_custom_info_change_req']);
        }
        return $model;
    }
    /**
     * @description 请求提体
     * @var salesOrderCustomInfoChangeReq
     */
    public $salesOrderCustomInfoChangeReq;

}
