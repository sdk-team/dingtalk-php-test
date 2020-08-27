<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SectionfirstOapiRhinoMosLayoutOperationdefsResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SectionfirstOapiRhinoMosLayoutOperationdefsResponseBody\result\operationExecutorAssigns;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SectionfirstOapiRhinoMosLayoutOperationdefsResponseBody\result\workUnits;

class result extends Model {
    protected $_name = [
        'applicableSizeCode' => 'applicable_size_code',
        'autoSchedule' => 'auto_schedule',
        'enterCondition' => 'enter_condition',
        'flowId' => 'flow_id',
        'flowVersion' => 'flow_version',
        'name' => 'name',
        'nextOperationExternalIds' => 'next_operation_external_ids',
        'nextOperationUids' => 'next_operation_uids',
        'operationExecutorAssigns' => 'operation_executor_assigns',
        'operationExternalId' => 'operation_external_id',
        'operationType' => 'operation_type',
        'operationUid' => 'operation_uid',
        'processTypeCode' => 'process_type_code',
        'sectionCode' => 'section_code',
        'sectionName' => 'section_name',
        'skip' => 'skip',
        'stdCost' => 'std_cost',
        'workUnits' => 'work_units',
        'bizSource' => 'biz_source',
        'bizCode' => 'biz_code',
        'execSystem' => 'exec_system',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->applicableSizeCode) {
            $res['applicable_size_code'] = $this->applicableSizeCode;
        }
        if (null !== $this->autoSchedule) {
            $res['auto_schedule'] = $this->autoSchedule;
        }
        if (null !== $this->enterCondition) {
            $res['enter_condition'] = $this->enterCondition;
        }
        if (null !== $this->flowId) {
            $res['flow_id'] = $this->flowId;
        }
        if (null !== $this->flowVersion) {
            $res['flow_version'] = $this->flowVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nextOperationExternalIds) {
            $res['next_operation_external_ids'] = $this->nextOperationExternalIds;
        }
        if (null !== $this->nextOperationUids) {
            $res['next_operation_uids'] = $this->nextOperationUids;
        }
        if (null !== $this->operationExecutorAssigns) {
            $res['operation_executor_assigns'] = [];
            if(null !== $this->operationExecutorAssigns && is_array($this->operationExecutorAssigns)){
                $n = 0;
                foreach($this->operationExecutorAssigns as $item){
                    $res['operation_executor_assigns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operationExternalId) {
            $res['operation_external_id'] = $this->operationExternalId;
        }
        if (null !== $this->operationType) {
            $res['operation_type'] = $this->operationType;
        }
        if (null !== $this->operationUid) {
            $res['operation_uid'] = $this->operationUid;
        }
        if (null !== $this->processTypeCode) {
            $res['process_type_code'] = $this->processTypeCode;
        }
        if (null !== $this->sectionCode) {
            $res['section_code'] = $this->sectionCode;
        }
        if (null !== $this->sectionName) {
            $res['section_name'] = $this->sectionName;
        }
        if (null !== $this->skip) {
            $res['skip'] = $this->skip;
        }
        if (null !== $this->stdCost) {
            $res['std_cost'] = $this->stdCost;
        }
        if (null !== $this->workUnits) {
            $res['work_units'] = [];
            if(null !== $this->workUnits && is_array($this->workUnits)){
                $n = 0;
                foreach($this->workUnits as $item){
                    $res['work_units'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizSource) {
            $res['biz_source'] = $this->bizSource;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->execSystem) {
            $res['exec_system'] = $this->execSystem;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['applicable_size_code'])){
            $model->applicableSizeCode = $map['applicable_size_code'];
        }
        if(isset($map['auto_schedule'])){
            $model->autoSchedule = $map['auto_schedule'];
        }
        if(isset($map['enter_condition'])){
            $model->enterCondition = $map['enter_condition'];
        }
        if(isset($map['flow_id'])){
            $model->flowId = $map['flow_id'];
        }
        if(isset($map['flow_version'])){
            $model->flowVersion = $map['flow_version'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['next_operation_external_ids'])){
            if(!empty($map['next_operation_external_ids'])){
                $model->nextOperationExternalIds = $map['next_operation_external_ids'];
            }
        }
        if(isset($map['next_operation_uids'])){
            if(!empty($map['next_operation_uids'])){
                $model->nextOperationUids = $map['next_operation_uids'];
            }
        }
        if(isset($map['operation_executor_assigns'])){
            if(!empty($map['operation_executor_assigns'])){
                $model->operationExecutorAssigns = [];
                $n = 0;
                foreach($map['operation_executor_assigns'] as $item) {
                    $model->operationExecutorAssigns[$n++] = null !== $item ? operationExecutorAssigns::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['operation_external_id'])){
            $model->operationExternalId = $map['operation_external_id'];
        }
        if(isset($map['operation_type'])){
            $model->operationType = $map['operation_type'];
        }
        if(isset($map['operation_uid'])){
            $model->operationUid = $map['operation_uid'];
        }
        if(isset($map['process_type_code'])){
            $model->processTypeCode = $map['process_type_code'];
        }
        if(isset($map['section_code'])){
            $model->sectionCode = $map['section_code'];
        }
        if(isset($map['section_name'])){
            $model->sectionName = $map['section_name'];
        }
        if(isset($map['skip'])){
            $model->skip = $map['skip'];
        }
        if(isset($map['std_cost'])){
            $model->stdCost = $map['std_cost'];
        }
        if(isset($map['work_units'])){
            if(!empty($map['work_units'])){
                $model->workUnits = [];
                $n = 0;
                foreach($map['work_units'] as $item) {
                    $model->workUnits[$n++] = null !== $item ? workUnits::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['biz_source'])){
            $model->bizSource = $map['biz_source'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['exec_system'])){
            $model->execSystem = $map['exec_system'];
        }
        return $model;
    }
    /**
     * @description 适用尺码
     * @var string
     */
    public $applicableSizeCode;

    /**
     * @description 是否需要调度
     * @var bool
     */
    public $autoSchedule;

    /**
     * @description 进入条件：ANY_MATCH/ALL_MATCH
     * @var string
     */
    public $enterCondition;

    /**
     * @description PaaSflowID（只用于返回，保存会自增）
     * @var int
     */
    public $flowId;

    /**
     * @description 工序定义版本
     * @var int
     */
    public $flowVersion;

    /**
     * @description 工序名称
     * @var string
     */
    public $name;

    /**
     * @description 后续工序外部ID列表
     * @var array
     */
    public $nextOperationExternalIds;

    /**
     * @description 后续工序唯一ID列表
     * @var array
     */
    public $nextOperationUids;

    /**
     * @description 工序执行器分配
     * @var array
     */
    public $operationExecutorAssigns;

    /**
     * @description 工序外部ID
     * @var string
     */
    public $operationExternalId;

    /**
     * @description 工序类型：ASSIST/QUALITY_INSPECT/TECHNOLOGY
     * @var string
     */
    public $operationType;

    /**
     * @description 工序唯一ID
     * @var int
     */
    public $operationUid;

    /**
     * @description 工序能力类型：SJ/PP/TR等
     * @var string
     */
    public $processTypeCode;

    /**
     * @description 工段CODE：F-SL/C..
     * @var string
     */
    public $sectionCode;

    /**
     * @description 工段名称：缝制-碎料/裁床..
     * @var string
     */
    public $sectionName;

    /**
     * @description 是否跳过(不生产)
     * @var bool
     */
    public $skip;

    /**
     * @description 标准工时/秒
     * @var string
     */
    public $stdCost;

    /**
     * @description 分配单元列表
     * @var array
     */
    public $workUnits;

    /**
     * @description 业务来源
     * @var string
     */
    public $bizSource;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

    /**
     * @description 执行系统
     * @var string
     */
    public $execSystem;

}
