<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessinstanceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessinstanceResponseBody\processInstance\operationRecords;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessinstanceResponseBody\processInstance\tasks;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessinstanceResponseBody\processInstance\formComponentValues;

class processInstance extends Model {
    protected $_name = [
        'title' => 'title',
        'createTime' => 'create_time',
        'finishTime' => 'finish_time',
        'originatorUserid' => 'originator_userid',
        'originatorDeptId' => 'originator_dept_id',
        'status' => 'status',
        'approverUserids' => 'approver_userids',
        'ccUserids' => 'cc_userids',
        'result' => 'result',
        'businessId' => 'business_id',
        'operationRecords' => 'operation_records',
        'tasks' => 'tasks',
        'originatorDeptName' => 'originator_dept_name',
        'bizAction' => 'biz_action',
        'attachedProcessInstanceIds' => 'attached_process_instance_ids',
        'formComponentValues' => 'form_component_values',
        'mainProcessInstanceId' => 'main_process_instance_id',
    ];
    public function validate() {
        Model::validatePattern('createTime', $this->createTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('finishTime', $this->finishTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->finishTime) {
            $res['finish_time'] = $this->finishTime;
        }
        if (null !== $this->originatorUserid) {
            $res['originator_userid'] = $this->originatorUserid;
        }
        if (null !== $this->originatorDeptId) {
            $res['originator_dept_id'] = $this->originatorDeptId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->approverUserids) {
            $res['approver_userids'] = $this->approverUserids;
        }
        if (null !== $this->ccUserids) {
            $res['cc_userids'] = $this->ccUserids;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->businessId) {
            $res['business_id'] = $this->businessId;
        }
        if (null !== $this->operationRecords) {
            $res['operation_records'] = [];
            if(null !== $this->operationRecords && is_array($this->operationRecords)){
                $n = 0;
                foreach($this->operationRecords as $item){
                    $res['operation_records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tasks) {
            $res['tasks'] = [];
            if(null !== $this->tasks && is_array($this->tasks)){
                $n = 0;
                foreach($this->tasks as $item){
                    $res['tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->originatorDeptName) {
            $res['originator_dept_name'] = $this->originatorDeptName;
        }
        if (null !== $this->bizAction) {
            $res['biz_action'] = $this->bizAction;
        }
        if (null !== $this->attachedProcessInstanceIds) {
            $res['attached_process_instance_ids'] = $this->attachedProcessInstanceIds;
        }
        if (null !== $this->formComponentValues) {
            $res['form_component_values'] = [];
            if(null !== $this->formComponentValues && is_array($this->formComponentValues)){
                $n = 0;
                foreach($this->formComponentValues as $item){
                    $res['form_component_values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mainProcessInstanceId) {
            $res['main_process_instance_id'] = $this->mainProcessInstanceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return processInstance
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['finish_time'])){
            $model->finishTime = $map['finish_time'];
        }
        if(isset($map['originator_userid'])){
            $model->originatorUserid = $map['originator_userid'];
        }
        if(isset($map['originator_dept_id'])){
            $model->originatorDeptId = $map['originator_dept_id'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['approver_userids'])){
            if(!empty($map['approver_userids'])){
                $model->approverUserids = $map['approver_userids'];
            }
        }
        if(isset($map['cc_userids'])){
            if(!empty($map['cc_userids'])){
                $model->ccUserids = $map['cc_userids'];
            }
        }
        if(isset($map['result'])){
            $model->result = $map['result'];
        }
        if(isset($map['business_id'])){
            $model->businessId = $map['business_id'];
        }
        if(isset($map['operation_records'])){
            if(!empty($map['operation_records'])){
                $model->operationRecords = [];
                $n = 0;
                foreach($map['operation_records'] as $item) {
                    $model->operationRecords[$n++] = null !== $item ? operationRecords::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['tasks'])){
            if(!empty($map['tasks'])){
                $model->tasks = [];
                $n = 0;
                foreach($map['tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['originator_dept_name'])){
            $model->originatorDeptName = $map['originator_dept_name'];
        }
        if(isset($map['biz_action'])){
            $model->bizAction = $map['biz_action'];
        }
        if(isset($map['attached_process_instance_ids'])){
            if(!empty($map['attached_process_instance_ids'])){
                $model->attachedProcessInstanceIds = $map['attached_process_instance_ids'];
            }
        }
        if(isset($map['form_component_values'])){
            if(!empty($map['form_component_values'])){
                $model->formComponentValues = [];
                $n = 0;
                foreach($map['form_component_values'] as $item) {
                    $model->formComponentValues[$n++] = null !== $item ? formComponentValues::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['main_process_instance_id'])){
            $model->mainProcessInstanceId = $map['main_process_instance_id'];
        }
        return $model;
    }
    /**
     * @description 审批实例标题
     * @var string
     */
    public $title;

    /**
     * @description 开始时间
     * @var string
     */
    public $createTime;

    /**
     * @description 结束时间
     * @var string
     */
    public $finishTime;

    /**
     * @description 发起人
     * @var string
     */
    public $originatorUserid;

    /**
     * @description 发起部门
     * @var string
     */
    public $originatorDeptId;

    /**
     * @description 审批状态，分为NEW（刚创建）|RUNNING（运行中）|TERMINATED（被终止）|COMPLETED（完成）|CANCELED（取消）
     * @var string
     */
    public $status;

    /**
     * @description 审批人
     * @var array
     */
    public $approverUserids;

    /**
     * @description 抄送人
     * @var array
     */
    public $ccUserids;

    /**
     * @description 审批结果，分为agree和refuse
     * @var string
     */
    public $result;

    /**
     * @description 审批实例业务编号
     * @var string
     */
    public $businessId;

    /**
     * @description 操作记录列表
     * @var array
     */
    public $operationRecords;

    /**
     * @description 任务列表
     * @var array
     */
    public $tasks;

    /**
     * @description 发起部门
     * @var string
     */
    public $originatorDeptName;

    /**
     * @description 审批实例业务动作,MODIFY表示该审批实例是基于原来的实例修改而来，REVOKE表示该审批实例是由原来的实例撤销后重新发起的,NONE表示正常发起
     * @var string
     */
    public $bizAction;

    /**
     * @description 审批附属实例列表，当已经通过的审批实例被修改或撤销，会生成一个新的实例，作为原有审批实例的附属。如果想知道当前已经通过的审批实例的状态，可以依次遍历它的附属列表，查询里面每个实例的biz_action
     * @var array
     */
    public $attachedProcessInstanceIds;

    /**
     * @description 表单详情列表
     * @var array
     */
    public $formComponentValues;

    /**
     * @description 主流程实例标识
     * @var string
     */
    public $mainProcessInstanceId;

}
