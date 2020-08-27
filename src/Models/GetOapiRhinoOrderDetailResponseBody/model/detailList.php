<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoOrderDetailResponseBody\model;

use AlibabaCloud\Tea\Model;

class detailList extends Model {
    protected $_name = [
        'id' => 'id',
        'productOrderId' => 'product_order_id',
        'quantity' => 'quantity',
        'sizeId' => 'size_id',
        'sizeName' => 'size_name',
        'tenantId' => 'tenant_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->productOrderId) {
            $res['product_order_id'] = $this->productOrderId;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->sizeId) {
            $res['size_id'] = $this->sizeId;
        }
        if (null !== $this->sizeName) {
            $res['size_name'] = $this->sizeName;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return detailList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['product_order_id'])){
            $model->productOrderId = $map['product_order_id'];
        }
        if(isset($map['quantity'])){
            $model->quantity = $map['quantity'];
        }
        if(isset($map['size_id'])){
            $model->sizeId = $map['size_id'];
        }
        if(isset($map['size_name'])){
            $model->sizeName = $map['size_name'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        return $model;
    }
    /**
     * @description 主键id
     * @var int
     */
    public $id;

    /**
     * @description 生产订单id
     * @var int
     */
    public $productOrderId;

    /**
     * @description 数量
     * @var int
     */
    public $quantity;

    /**
     * @description 尺码id
     * @var int
     */
    public $sizeId;

    /**
     * @description 尺码名称
     * @var string
     */
    public $sizeName;

    /**
     * @description 租户id
     * @var string
     */
    public $tenantId;

}
