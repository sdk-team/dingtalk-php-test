<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InvalidbyentopOapiRhinoMosExecPerformParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InvalidbyentopOapiRhinoMosExecPerformParams\req\entityOperations;

class req extends Model {
    protected $_name = [
        'entityType' => 'entity_type',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
        'entityOperations' => 'entity_operations',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->entityOperations) {
            $res['entity_operations'] = [];
            if(null !== $this->entityOperations && is_array($this->entityOperations)){
                $n = 0;
                foreach($this->entityOperations as $item){
                    $res['entity_operations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['entity_type'])){
            $model->entityType = $map['entity_type'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['entity_operations'])){
            if(!empty($map['entity_operations'])){
                $model->entityOperations = [];
                $n = 0;
                foreach($map['entity_operations'] as $item) {
                    $model->entityOperations[$n++] = null !== $item ? entityOperations::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        return $model;
    }
    /**
     * @description 实体类型
     * @var string
     */
    public $entityType;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 扩展参数
     * @var string
     */
    public $userid;

    /**
     * @description 实体和工序
     * @var array
     */
    public $entityOperations;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

}
