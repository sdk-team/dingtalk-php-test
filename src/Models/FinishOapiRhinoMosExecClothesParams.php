<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class FinishOapiRhinoMosExecClothesParams extends Model {
    protected $_name = [
        'entityIds' => 'entity_ids',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('entityIds', $this->entityIds, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->entityIds) {
            $res['entity_ids'] = $this->entityIds;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return FinishOapiRhinoMosExecClothesParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['entity_ids'])){
            if(!empty($map['entity_ids'])){
                $model->entityIds = $map['entity_ids'];
            }
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        return $model;
    }
    /**
     * @description 衣服ID列表
     * @var array
     */
    public $entityIds;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 业务参数[这里先预留],这里是用户ID,比如钉钉用户ID
     * @var string
     */
    public $userid;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

}
