<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecPerformParams;

use AlibabaCloud\Tea\Model;

class operations extends Model {
    protected $_name = [
        'context' => 'context',
        'deviceIds' => 'device_ids',
        'entityId' => 'entity_id',
        'entityType' => 'entity_type',
        'flowVersion' => 'flow_version',
        'operationType' => 'operation_type',
        'operationUid' => 'operation_uid',
        'orderId' => 'order_id',
        'performStatus' => 'perform_status',
        'performType' => 'perform_type',
        'priority' => 'priority',
        'processTypeCode' => 'process_type_code',
        'sectionCode' => 'section_code',
        'sourceId' => 'source_id',
        'sourceType' => 'source_type',
        'workNos' => 'work_nos',
        'workstationCode' => 'workstation_code',
        'processCostTime' => 'process_cost_time',
        'processEndTime' => 'process_end_time',
        'processStartTime' => 'process_start_time',
    ];
    public function validate() {
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('flowVersion', $this->flowVersion, true);
        Model::validateRequired('operationType', $this->operationType, true);
        Model::validateRequired('operationUid', $this->operationUid, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('performType', $this->performType, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('processTypeCode', $this->processTypeCode, true);
        Model::validateRequired('sourceId', $this->sourceId, true);
        Model::validateRequired('sourceType', $this->sourceType, true);
        Model::validatePattern('processEndTime', $this->processEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('processStartTime', $this->processStartTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }
        if (null !== $this->deviceIds) {
            $res['device_ids'] = $this->deviceIds;
        }
        if (null !== $this->entityId) {
            $res['entity_id'] = $this->entityId;
        }
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        if (null !== $this->flowVersion) {
            $res['flow_version'] = $this->flowVersion;
        }
        if (null !== $this->operationType) {
            $res['operation_type'] = $this->operationType;
        }
        if (null !== $this->operationUid) {
            $res['operation_uid'] = $this->operationUid;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->performStatus) {
            $res['perform_status'] = $this->performStatus;
        }
        if (null !== $this->performType) {
            $res['perform_type'] = $this->performType;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->processTypeCode) {
            $res['process_type_code'] = $this->processTypeCode;
        }
        if (null !== $this->sectionCode) {
            $res['section_code'] = $this->sectionCode;
        }
        if (null !== $this->sourceId) {
            $res['source_id'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['source_type'] = $this->sourceType;
        }
        if (null !== $this->workNos) {
            $res['work_nos'] = $this->workNos;
        }
        if (null !== $this->workstationCode) {
            $res['workstation_code'] = $this->workstationCode;
        }
        if (null !== $this->processCostTime) {
            $res['process_cost_time'] = $this->processCostTime;
        }
        if (null !== $this->processEndTime) {
            $res['process_end_time'] = $this->processEndTime;
        }
        if (null !== $this->processStartTime) {
            $res['process_start_time'] = $this->processStartTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return operations
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['context'])){
            $model->context = $map['context'];
        }
        if(isset($map['device_ids'])){
            if(!empty($map['device_ids'])){
                $model->deviceIds = $map['device_ids'];
            }
        }
        if(isset($map['entity_id'])){
            $model->entityId = $map['entity_id'];
        }
        if(isset($map['entity_type'])){
            $model->entityType = $map['entity_type'];
        }
        if(isset($map['flow_version'])){
            $model->flowVersion = $map['flow_version'];
        }
        if(isset($map['operation_type'])){
            $model->operationType = $map['operation_type'];
        }
        if(isset($map['operation_uid'])){
            $model->operationUid = $map['operation_uid'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['perform_status'])){
            $model->performStatus = $map['perform_status'];
        }
        if(isset($map['perform_type'])){
            $model->performType = $map['perform_type'];
        }
        if(isset($map['priority'])){
            $model->priority = $map['priority'];
        }
        if(isset($map['process_type_code'])){
            $model->processTypeCode = $map['process_type_code'];
        }
        if(isset($map['section_code'])){
            $model->sectionCode = $map['section_code'];
        }
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['source_type'])){
            $model->sourceType = $map['source_type'];
        }
        if(isset($map['work_nos'])){
            if(!empty($map['work_nos'])){
                $model->workNos = $map['work_nos'];
            }
        }
        if(isset($map['workstation_code'])){
            $model->workstationCode = $map['workstation_code'];
        }
        if(isset($map['process_cost_time'])){
            $model->processCostTime = $map['process_cost_time'];
        }
        if(isset($map['process_end_time'])){
            $model->processEndTime = $map['process_end_time'];
        }
        if(isset($map['process_start_time'])){
            $model->processStartTime = $map['process_start_time'];
        }
        return $model;
    }
    /**
     * @description 执行上下文
     * @var string
     */
    public $context;

    /**
     * @description 设备ID列表
     * @var array
     */
    public $deviceIds;

    /**
     * @description 实体ID
     * @var int
     */
    public $entityId;

    /**
     * @description 实体类型
     * @var string
     */
    public $entityType;

    /**
     * @description 排位布局版本
     * @var int
     */
    public $flowVersion;

    /**
     * @description 工序类型
     * @var string
     */
    public $operationType;

    /**
     * @description 工序ID
     * @var int
     */
    public $operationUid;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

    /**
     * @description 执行状态
     * @var string
     */
    public $performStatus;

    /**
     * @description 执行类型
     * @var string
     */
    public $performType;

    /**
     * @description 优先级
     * @var int
     */
    public $priority;

    /**
     * @description 工序能力类型
     * @var string
     */
    public $processTypeCode;

    /**
     * @description 工段
     * @var string
     */
    public $sectionCode;

    /**
     * @description 来源ID
     * @var string
     */
    public $sourceId;

    /**
     * @description 来源类型
     * @var string
     */
    public $sourceType;

    /**
     * @description 执行人工号
     * @var array
     */
    public $workNos;

    /**
     * @description 执行工位
     * @var string
     */
    public $workstationCode;

    /**
     * @description 工序执行耗时，单位秒
     * @var string
     */
    public $processCostTime;

    /**
     * @description 执行完成时间
     * @var string
     */
    public $processEndTime;

    /**
     * @description 执行开始时间
     * @var string
     */
    public $processStartTime;

}
