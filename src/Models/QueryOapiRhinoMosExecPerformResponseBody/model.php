<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoMosExecPerformResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'active' => 'active',
        'batchId' => 'batch_id',
        'context' => 'context',
        'createType' => 'create_type',
        'deviceIds' => 'device_ids',
        'entityId' => 'entity_id',
        'entityType' => 'entity_type',
        'flowVersion' => 'flow_version',
        'id' => 'id',
        'operationType' => 'operation_type',
        'operationUid' => 'operation_uid',
        'orderId' => 'order_id',
        'performStatus' => 'perform_status',
        'performType' => 'perform_type',
        'priority' => 'priority',
        'processTypeCode' => 'process_type_code',
        'processingEndTime' => 'processing_end_time',
        'processingStartTime' => 'processing_start_time',
        'sectionCode' => 'section_code',
        'sourceId' => 'source_id',
        'sourceType' => 'source_type',
        'tenantId' => 'tenant_id',
        'workNos' => 'work_nos',
        'workstationCode' => 'workstation_code',
        'processCostTime' => 'process_cost_time',
    ];
    public function validate() {
        Model::validatePattern('processingEndTime', $this->processingEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('processingStartTime', $this->processingStartTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->batchId) {
            $res['batch_id'] = $this->batchId;
        }
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }
        if (null !== $this->createType) {
            $res['create_type'] = $this->createType;
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (null !== $this->processingEndTime) {
            $res['processing_end_time'] = $this->processingEndTime;
        }
        if (null !== $this->processingStartTime) {
            $res['processing_start_time'] = $this->processingStartTime;
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
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
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
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['active'])){
            $model->active = $map['active'];
        }
        if(isset($map['batch_id'])){
            $model->batchId = $map['batch_id'];
        }
        if(isset($map['context'])){
            $model->context = $map['context'];
        }
        if(isset($map['create_type'])){
            $model->createType = $map['create_type'];
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
        if(isset($map['id'])){
            $model->id = $map['id'];
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
        if(isset($map['processing_end_time'])){
            $model->processingEndTime = $map['processing_end_time'];
        }
        if(isset($map['processing_start_time'])){
            $model->processingStartTime = $map['processing_start_time'];
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
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
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
        return $model;
    }
    /**
     * @description 是否有效
     * @var string
     */
    public $active;

    /**
     * @description 分批ID
     * @var int
     */
    public $batchId;

    /**
     * @description 上下文
     * @var string
     */
    public $context;

    /**
     * @description 创建类型，是新建的还是已存在的
     * @var string
     */
    public $createType;

    /**
     * @description 设备ID列表
     * @var array
     */
    public $deviceIds;

    /**
     * @description 实例ID
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
     * @description 工序执行ID
     * @var int
     */
    public $id;

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
     * @description 工序执行结束时间
     * @var string
     */
    public $processingEndTime;

    /**
     * @description 工序执行开始时间
     * @var string
     */
    public $processingStartTime;

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
     * @description 租户ID
     * @var string
     */
    public $tenantId;

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
     * @description 工序执行耗时
     * @var string
     */
    public $processCostTime;

}
