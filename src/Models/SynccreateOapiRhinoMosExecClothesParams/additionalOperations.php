<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SynccreateOapiRhinoMosExecClothesParams;

use AlibabaCloud\Tea\Model;

class additionalOperations extends Model {
    protected $_name = [
        'deviceIds' => 'device_ids',
        'flowVersion' => 'flow_version',
        'operationType' => 'operation_type',
        'operationUid' => 'operation_uid',
        'performStatus' => 'perform_status',
        'priority' => 'priority',
        'processTypeCode' => 'process_type_code',
        'sectionCode' => 'section_code',
        'workNos' => 'work_nos',
        'workstationCode' => 'workstation_code',
        'processEndTime' => 'process_end_time',
        'processStartTime' => 'process_start_time',
    ];
    public function validate() {
        Model::validateRequired('flowVersion', $this->flowVersion, true);
        Model::validateRequired('operationType', $this->operationType, true);
        Model::validateRequired('operationUid', $this->operationUid, true);
        Model::validateRequired('performStatus', $this->performStatus, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validatePattern('processEndTime', $this->processEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('processStartTime', $this->processStartTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deviceIds) {
            $res['device_ids'] = $this->deviceIds;
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
        if (null !== $this->performStatus) {
            $res['perform_status'] = $this->performStatus;
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
        if (null !== $this->workNos) {
            $res['work_nos'] = $this->workNos;
        }
        if (null !== $this->workstationCode) {
            $res['workstation_code'] = $this->workstationCode;
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
     * @return additionalOperations
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_ids'])){
            if(!empty($map['device_ids'])){
                $model->deviceIds = $map['device_ids'];
            }
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
        if(isset($map['perform_status'])){
            $model->performStatus = $map['perform_status'];
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
        if(isset($map['work_nos'])){
            if(!empty($map['work_nos'])){
                $model->workNos = $map['work_nos'];
            }
        }
        if(isset($map['workstation_code'])){
            $model->workstationCode = $map['workstation_code'];
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
     * @description 设备ID列表
     * @var array
     */
    public $deviceIds;

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
     * @description 工序执行状态
     * @var string
     */
    public $performStatus;

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
     * @description 执行人
     * @var array
     */
    public $workNos;

    /**
     * @description 工位
     * @var string
     */
    public $workstationCode;

    /**
     * @description 工序执行完成时间
     * @var string
     */
    public $processEndTime;

    /**
     * @description 工序执行开始时间
     * @var string
     */
    public $processStartTime;

}
