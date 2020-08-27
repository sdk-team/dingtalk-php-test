<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiRhinoMosExecPerformParams extends Model {
    protected $_name = [
        'tenantId' => 'tenant_id',
        'activeCondition' => 'active_condition',
        'entityType' => 'entity_type',
        'performStatusList' => 'perform_status_list',
        'workstationCodes' => 'workstation_codes',
        'entityIds' => 'entity_ids',
        'operationUids' => 'operation_uids',
        'userid' => 'userid',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('entityType', $this->entityType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->activeCondition) {
            $res['active_condition'] = $this->activeCondition;
        }
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        if (null !== $this->performStatusList) {
            $res['perform_status_list'] = $this->performStatusList;
        }
        if (null !== $this->workstationCodes) {
            $res['workstation_codes'] = $this->workstationCodes;
        }
        if (null !== $this->entityIds) {
            $res['entity_ids'] = $this->entityIds;
        }
        if (null !== $this->operationUids) {
            $res['operation_uids'] = $this->operationUids;
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
     * @return QueryOapiRhinoMosExecPerformParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['active_condition'])){
            $model->activeCondition = $map['active_condition'];
        }
        if(isset($map['entity_type'])){
            $model->entityType = $map['entity_type'];
        }
        if(isset($map['perform_status_list'])){
            if(!empty($map['perform_status_list'])){
                $model->performStatusList = $map['perform_status_list'];
            }
        }
        if(isset($map['workstation_codes'])){
            if(!empty($map['workstation_codes'])){
                $model->workstationCodes = $map['workstation_codes'];
            }
        }
        if(isset($map['entity_ids'])){
            if(!empty($map['entity_ids'])){
                $model->entityIds = $map['entity_ids'];
            }
        }
        if(isset($map['operation_uids'])){
            if(!empty($map['operation_uids'])){
                $model->operationUids = $map['operation_uids'];
            }
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
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 生效条件
     * @var string
     */
    public $activeCondition;

    /**
     * @description 实体类型
     * @var string
     */
    public $entityType;

    /**
     * @description 执行状态
     * @var array
     */
    public $performStatusList;

    /**
     * @description 执行工位列表
     * @var array
     */
    public $workstationCodes;

    /**
     * @description 实体ID列表
     * @var array
     */
    public $entityIds;

    /**
     * @description 工序列表
     * @var array
     */
    public $operationUids;

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
