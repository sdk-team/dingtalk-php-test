<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiProcessinstanceParams\formComponentValues;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiProcessinstanceParams\approversV2;

class CreateOapiProcessinstanceParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'processCode' => 'process_code',
        'originatorUserId' => 'originator_user_id',
        'deptId' => 'dept_id',
        'approvers' => 'approvers',
        'ccList' => 'cc_list',
        'ccPosition' => 'cc_position',
        'formComponentValues' => 'form_component_values',
        'approversV2' => 'approvers_v2',
    ];
    public function validate() {
        Model::validateRequired('processCode', $this->processCode, true);
        Model::validateRequired('originatorUserId', $this->originatorUserId, true);
        Model::validateRequired('deptId', $this->deptId, true);
        Model::validateRequired('formComponentValues', $this->formComponentValues, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->originatorUserId) {
            $res['originator_user_id'] = $this->originatorUserId;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        if (null !== $this->approvers) {
            $res['approvers'] = $this->approvers;
        }
        if (null !== $this->ccList) {
            $res['cc_list'] = $this->ccList;
        }
        if (null !== $this->ccPosition) {
            $res['cc_position'] = $this->ccPosition;
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
        if (null !== $this->approversV2) {
            $res['approvers_v2'] = [];
            if(null !== $this->approversV2 && is_array($this->approversV2)){
                $n = 0;
                foreach($this->approversV2 as $item){
                    $res['approvers_v2'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiProcessinstanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['originator_user_id'])){
            $model->originatorUserId = $map['originator_user_id'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        if(isset($map['approvers'])){
            if(!empty($map['approvers'])){
                $model->approvers = $map['approvers'];
            }
        }
        if(isset($map['cc_list'])){
            if(!empty($map['cc_list'])){
                $model->ccList = $map['cc_list'];
            }
        }
        if(isset($map['cc_position'])){
            $model->ccPosition = $map['cc_position'];
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
        if(isset($map['approvers_v2'])){
            if(!empty($map['approvers_v2'])){
                $model->approversV2 = [];
                $n = 0;
                foreach($map['approvers_v2'] as $item) {
                    $model->approversV2[$n++] = null !== $item ? approversV2::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 企业微应用标识
     * @var int
     */
    public $agentId;

    /**
     * @description 审批流的唯一码
     * @var string
     */
    public $processCode;

    /**
     * @description 审批实例发起人的userid
     * @var string
     */
    public $originatorUserId;

    /**
     * @description 发起人所在的部门
     * @var int
     */
    public $deptId;

    /**
     * @description 审批人userid列表
     * @var array
     */
    public $approvers;

    /**
     * @description 抄送人userid列表
     * @var array
     */
    public $ccList;

    /**
     * @description 抄送时间,分为（START,FINISH,START_FINISH）
     * @var string
     */
    public $ccPosition;

    /**
     * @description 审批流表单参数
     * @var array
     */
    public $formComponentValues;

    /**
     * @description 审批人列表，支持会签/或签，优先级高于approvers变量
     * @var array
     */
    public $approversV2;

}
