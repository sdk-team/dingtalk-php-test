<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecOperationConditionResponseBody\model;

use AlibabaCloud\Tea\Model;

class resultList extends Model {
    protected $_name = [
        'colorId' => 'color_id',
        'colorName' => 'color_name',
        'createType' => 'create_type',
        'id' => 'id',
        'orderId' => 'order_id',
        'sizeCode' => 'size_code',
        'sizeName' => 'size_name',
        'sourceId' => 'source_id',
        'sourceType' => 'source_type',
        'status' => 'status',
        'tenantId' => 'tenant_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->colorId) {
            $res['color_id'] = $this->colorId;
        }
        if (null !== $this->colorName) {
            $res['color_name'] = $this->colorName;
        }
        if (null !== $this->createType) {
            $res['create_type'] = $this->createType;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->sizeCode) {
            $res['size_code'] = $this->sizeCode;
        }
        if (null !== $this->sizeName) {
            $res['size_name'] = $this->sizeName;
        }
        if (null !== $this->sourceId) {
            $res['source_id'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['source_type'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return resultList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['color_id'])){
            $model->colorId = $map['color_id'];
        }
        if(isset($map['color_name'])){
            $model->colorName = $map['color_name'];
        }
        if(isset($map['create_type'])){
            $model->createType = $map['create_type'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['size_code'])){
            $model->sizeCode = $map['size_code'];
        }
        if(isset($map['size_name'])){
            $model->sizeName = $map['size_name'];
        }
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['source_type'])){
            $model->sourceType = $map['source_type'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        return $model;
    }
    /**
     * @description 颜色id
     * @var int
     */
    public $colorId;

    /**
     * @description 颜色名称
     * @var string
     */
    public $colorName;

    /**
     * @description 创建类型
     * @var string
     */
    public $createType;

    /**
     * @description 实体id
     * @var int
     */
    public $id;

    /**
     * @description 订单id
     * @var int
     */
    public $orderId;

    /**
     * @description 尺码code
     * @var string
     */
    public $sizeCode;

    /**
     * @description 尺码名称
     * @var string
     */
    public $sizeName;

    /**
     * @description 源id
     * @var string
     */
    public $sourceId;

    /**
     * @description 源类型
     * @var string
     */
    public $sourceType;

    /**
     * @description 状态
     * @var string
     */
    public $status;

    /**
     * @description 租户
     * @var string
     */
    public $tenantId;

}
