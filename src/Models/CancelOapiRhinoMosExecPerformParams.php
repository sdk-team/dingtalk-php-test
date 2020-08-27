<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CancelOapiRhinoMosExecPerformParams extends Model {
    protected $_name = [
        'operationPerformRecordIds' => 'operation_perform_record_ids',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
        'context' => 'context',
        'orderId' => 'order_id',
        'stopSchedule' => 'stop_schedule',
    ];
    public function validate() {
        Model::validateRequired('operationPerformRecordIds', $this->operationPerformRecordIds, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->operationPerformRecordIds) {
            $res['operation_perform_record_ids'] = $this->operationPerformRecordIds;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->stopSchedule) {
            $res['stop_schedule'] = $this->stopSchedule;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CancelOapiRhinoMosExecPerformParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['operation_perform_record_ids'])){
            if(!empty($map['operation_perform_record_ids'])){
                $model->operationPerformRecordIds = $map['operation_perform_record_ids'];
            }
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['context'])){
            $model->context = $map['context'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['stop_schedule'])){
            $model->stopSchedule = $map['stop_schedule'];
        }
        return $model;
    }
    /**
     * @description 工序执行记录ID列表
     * @var array
     */
    public $operationPerformRecordIds;

    /**
     * @description 租户ID列表
     * @var string
     */
    public $tenantId;

    /**
     * @description 系统参数
     * @var string
     */
    public $userid;

    /**
     * @description 执行上下文
     * @var string
     */
    public $context;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

    /**
     * @description 是否停止调度
     * @var bool
     */
    public $stopSchedule;

}
