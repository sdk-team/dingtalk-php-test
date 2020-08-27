<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessWorkrecordTemplateParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessWorkrecordTemplateParams\saveProcessRequest\formComponentList;

class saveProcessRequest extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processCode' => 'process_code',
        'name' => 'name',
        'description' => 'description',
        'formComponentList' => 'form_component_list',
        'templateEditUrl' => 'template_edit_url',
        'submitUrl' => 'submit_url',
    ];
    public function validate() {
        Model::validateRequired('agentid', $this->agentid, true);
        Model::validateRequired('formComponentList', $this->formComponentList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->formComponentList) {
            $res['form_component_list'] = [];
            if(null !== $this->formComponentList && is_array($this->formComponentList)){
                $n = 0;
                foreach($this->formComponentList as $item){
                    $res['form_component_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateEditUrl) {
            $res['template_edit_url'] = $this->templateEditUrl;
        }
        if (null !== $this->submitUrl) {
            $res['submit_url'] = $this->submitUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return saveProcessRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['form_component_list'])){
            if(!empty($map['form_component_list'])){
                $model->formComponentList = [];
                $n = 0;
                foreach($map['form_component_list'] as $item) {
                    $model->formComponentList[$n++] = null !== $item ? formComponentList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['template_edit_url'])){
            $model->templateEditUrl = $map['template_edit_url'];
        }
        if(isset($map['submit_url'])){
            $model->submitUrl = $map['submit_url'];
        }
        return $model;
    }
    /**
     * @description 企业应用id
     * @var int
     */
    public $agentid;

    /**
     * @description 审批模板唯一码
     * @var string
     */
    public $processCode;

    /**
     * @description 审批模板名称
     * @var string
     */
    public $name;

    /**
     * @description 审批模板描述
     * @var string
     */
    public $description;

    /**
     * @description 表单列表
     * @var array
     */
    public $formComponentList;

    /**
     * @description 模板编辑页跳转url
     * @var string
     */
    public $templateEditUrl;

    /**
     * @description 发起审批页跳转url
     * @var string
     */
    public $submitUrl;

}
