<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UnscrapOapiRhinoMosExecClothesBatchParams;

use AlibabaCloud\Tea\Model;

class batchClothesPerformReq extends Model {
    protected $_name = [
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
        'entityIds' => 'entity_ids',
        'extProperties' => 'ext_properties',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->entityIds) {
            $res['entity_ids'] = $this->entityIds;
        }
        if (null !== $this->extProperties) {
            $res['ext_properties'] = $this->extProperties;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return batchClothesPerformReq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['entity_ids'])){
            if(!empty($map['entity_ids'])){
                $model->entityIds = $map['entity_ids'];
            }
        }
        if(isset($map['ext_properties'])){
            $model->extProperties = $map['ext_properties'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        return $model;
    }
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

    /**
     * @description 实体列表
     * @var array
     */
    public $entityIds;

    /**
     * @description 扩展属性
     * @var string
     */
    public $extProperties;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

}
