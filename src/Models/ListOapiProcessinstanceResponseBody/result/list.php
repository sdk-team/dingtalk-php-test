<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiProcessinstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiProcessinstanceResponseBody\result\list_\formComponentValues;

class list_ extends Model {
    protected $_name = [
        'processInstanceId' => 'process_instance_id',
        'title' => 'title',
        'createTime' => 'create_time',
        'finishTime' => 'finish_time',
        'originatorUserid' => 'originator_userid',
        'originatorDeptId' => 'originator_dept_id',
        'status' => 'status',
        'approverUseridList' => 'approver_userid_list',
        'ccUseridList' => 'cc_userid_list',
        'processInstanceResult' => 'process_instance_result',
        'businessId' => 'business_id',
        'formComponentValues' => 'form_component_values',
    ];
    public function validate() {
        Model::validatePattern('createTime', $this->createTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('finishTime', $this->finishTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
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
        if (null !== $this->approverUseridList) {
            $res['approver_userid_list'] = $this->approverUseridList;
        }
        if (null !== $this->ccUseridList) {
            $res['cc_userid_list'] = $this->ccUseridList;
        }
        if (null !== $this->processInstanceResult) {
            $res['process_instance_result'] = $this->processInstanceResult;
        }
        if (null !== $this->businessId) {
            $res['business_id'] = $this->businessId;
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
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
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
        if(isset($map['approver_userid_list'])){
            if(!empty($map['approver_userid_list'])){
                $model->approverUseridList = $map['approver_userid_list'];
            }
        }
        if(isset($map['cc_userid_list'])){
            if(!empty($map['cc_userid_list'])){
                $model->ccUseridList = $map['cc_userid_list'];
            }
        }
        if(isset($map['process_instance_result'])){
            $model->processInstanceResult = $map['process_instance_result'];
        }
        if(isset($map['business_id'])){
            $model->businessId = $map['business_id'];
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
        return $model;
    }
    /**
     * @description 审批实例id
     * @var string
     */
    public $processInstanceId;

    /**
     * @description 标题
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
     * @description 发起人userid
     * @var string
     */
    public $originatorUserid;

    /**
     * @description 发起人部门id
     * @var string
     */
    public $originatorDeptId;

    /**
     * @description 审批状态，分为NEW（刚创建）|RUNNING（运行中）|TERMINATED（被终止）|COMPLETED（完成）|CANCELED（取消）
     * @var string
     */
    public $status;

    /**
     * @description 审批人列表
     * @var array
     */
    public $approverUseridList;

    /**
     * @description 抄送人列表
     * @var array
     */
    public $ccUseridList;

    /**
     * @description 审批结果，分为agree和refuse
     * @var string
     */
    public $processInstanceResult;

    /**
     * @description 流程实例业务编号
     * @var string
     */
    public $businessId;

    /**
     * @description 审批表单变量组
     * @var array
     */
    public $formComponentValues;

}
