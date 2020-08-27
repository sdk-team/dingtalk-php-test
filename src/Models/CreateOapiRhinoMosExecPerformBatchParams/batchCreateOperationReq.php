<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecPerformBatchParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecPerformBatchParams\batchCreateOperationReq\entityCondition;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecPerformBatchParams\batchCreateOperationReq\performOperationReqs;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecPerformBatchParams\batchCreateOperationReq\source;

class batchCreateOperationReq extends Model {
    protected $_name = [
        'entityCondition' => 'entity_condition',
        'orderId' => 'order_id',
        'performOperationReqs' => 'perform_operation_reqs',
        'source' => 'source',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('performOperationReqs', $this->performOperationReqs, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->entityCondition) {
            $res['entity_condition'] = null !== $this->entityCondition ? $this->entityCondition->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->performOperationReqs) {
            $res['perform_operation_reqs'] = [];
            if(null !== $this->performOperationReqs && is_array($this->performOperationReqs)){
                $n = 0;
                foreach($this->performOperationReqs as $item){
                    $res['perform_operation_reqs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toMap() : null;
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
     * @return batchCreateOperationReq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['entity_condition'])){
            $model->entityCondition = entityCondition::fromMap($map['entity_condition']);
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['perform_operation_reqs'])){
            if(!empty($map['perform_operation_reqs'])){
                $model->performOperationReqs = [];
                $n = 0;
                foreach($map['perform_operation_reqs'] as $item) {
                    $model->performOperationReqs[$n++] = null !== $item ? performOperationReqs::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['source'])){
            $model->source = source::fromMap($map['source']);
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
     * @description 实体条件
     * @var entityCondition
     */
    public $entityCondition;

    /**
     * @description 订单id
     * @var int
     */
    public $orderId;

    /**
     * @description 工序请求
     * @var array
     */
    public $performOperationReqs;

    /**
     * @description 来源
     * @var source
     */
    public $source;

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
