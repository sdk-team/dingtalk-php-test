<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiProcessWorkrecordParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiProcessWorkrecordParams\request\formComponentValues;

class request extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processCode' => 'process_code',
        'originatorUserId' => 'originator_user_id',
        'formComponentValues' => 'form_component_values',
        'url' => 'url',
        'title' => 'title',
    ];
    public function validate() {
        Model::validateRequired('processCode', $this->processCode, true);
        Model::validateRequired('formComponentValues', $this->formComponentValues, true);
        Model::validateRequired('url', $this->url, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->originatorUserId) {
            $res['originator_user_id'] = $this->originatorUserId;
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
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if(isset($map['originator_user_id'])){
            $model->originatorUserId = $map['originator_user_id'];
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
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        return $model;
    }
    /**
     * @description 应用id
     * @var int
     */
    public $agentid;

    /**
     * @description 审批模板唯一码
     * @var string
     */
    public $processCode;

    /**
     * @description 审批发起人
     * @var string
     */
    public $originatorUserId;

    /**
     * @description 表单参数列表
     * @var array
     */
    public $formComponentValues;

    /**
     * @description 实例跳转链接
     * @var string
     */
    public $url;

    /**
     * @description 实例标题
     * @var string
     */
    public $title;

}
