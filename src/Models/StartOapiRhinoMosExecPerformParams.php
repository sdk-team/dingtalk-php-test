<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class StartOapiRhinoMosExecPerformParams extends Model {
    protected $_name = [
        'operationPerformRecordIds' => 'operation_perform_record_ids',
        'tenantId' => 'tenant_id',
        'deviceIds' => 'device_ids',
        'workNos' => 'work_nos',
        'userid' => 'userid',
        'orderId' => 'order_id',
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
        if (null !== $this->deviceIds) {
            $res['device_ids'] = $this->deviceIds;
        }
        if (null !== $this->workNos) {
            $res['work_nos'] = $this->workNos;
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
     * @return StartOapiRhinoMosExecPerformParams
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
        if(isset($map['device_ids'])){
            if(!empty($map['device_ids'])){
                $model->deviceIds = $map['device_ids'];
            }
        }
        if(isset($map['work_nos'])){
            if(!empty($map['work_nos'])){
                $model->workNos = $map['work_nos'];
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
     * @description 工序执行记录ID列表
     * @var array
     */
    public $operationPerformRecordIds;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 执行设备ID列表
     * @var array
     */
    public $deviceIds;

    /**
     * @description 执行员工列表
     * @var array
     */
    public $workNos;

    /**
     * @description 系统参数
     * @var string
     */
    public $userid;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

}
