<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ForecastOapiProcessApproversParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ForecastOapiProcessApproversParams\request\formComponentValues;

class request extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processCode' => 'process_code',
        'originatorUserid' => 'originator_userid',
        'originatorDeptid' => 'originator_deptid',
        'formComponentValues' => 'form_component_values',
    ];
    public function validate() {
        Model::validateRequired('processCode', $this->processCode, true);
        Model::validateRequired('originatorUserid', $this->originatorUserid, true);
        Model::validateRequired('originatorDeptid', $this->originatorDeptid, true);
        Model::validateRequired('formComponentValues', $this->formComponentValues, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->originatorUserid) {
            $res['originator_userid'] = $this->originatorUserid;
        }
        if (null !== $this->originatorDeptid) {
            $res['originator_deptid'] = $this->originatorDeptid;
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
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['originator_userid'])){
            $model->originatorUserid = $map['originator_userid'];
        }
        if(isset($map['originator_deptid'])){
            $model->originatorDeptid = $map['originator_deptid'];
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
     * @description 应用id
     * @var int
     */
    public $agentid;

    /**
     * @description 模板唯一码
     * @var string
     */
    public $processCode;

    /**
     * @description 发起人id
     * @var string
     */
    public $originatorUserid;

    /**
     * @description 发起人所在部门
     * @var int
     */
    public $originatorDeptid;

    /**
     * @description 表单数据
     * @var array
     */
    public $formComponentValues;

}
