<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoOrderTagParams;

use AlibabaCloud\Tea\Model;

class req extends Model {
    protected $_name = [
        'productOrderId' => 'product_order_id',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('productOrderId', $this->productOrderId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->productOrderId) {
            $res['product_order_id'] = $this->productOrderId;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['product_order_id'])){
            $model->productOrderId = $map['product_order_id'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 生产订单id
     * @var int
     */
    public $productOrderId;

    /**
     * @description 租户id
     * @var string
     */
    public $tenantId;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

}
