<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessParams\saveProcessRequest\formComponentList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessParams\saveProcessRequest\processConfig;

class saveProcessRequest extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processCode' => 'process_code',
        'disableFormEdit' => 'disable_form_edit',
        'disableStopProcessButton' => 'disable_stop_process_button',
        'name' => 'name',
        'description' => 'description',
        'formComponentList' => 'form_component_list',
        'fakeMode' => 'fake_mode',
        'templateEditUrl' => 'template_edit_url',
        'hidden' => 'hidden',
        'processConfig' => 'process_config',
    ];
    public function validate() {
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
        if (null !== $this->disableFormEdit) {
            $res['disable_form_edit'] = $this->disableFormEdit;
        }
        if (null !== $this->disableStopProcessButton) {
            $res['disable_stop_process_button'] = $this->disableStopProcessButton;
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
        if (null !== $this->fakeMode) {
            $res['fake_mode'] = $this->fakeMode;
        }
        if (null !== $this->templateEditUrl) {
            $res['template_edit_url'] = $this->templateEditUrl;
        }
        if (null !== $this->hidden) {
            $res['hidden'] = $this->hidden;
        }
        if (null !== $this->processConfig) {
            $res['process_config'] = null !== $this->processConfig ? $this->processConfig->toMap() : null;
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
        if(isset($map['disable_form_edit'])){
            $model->disableFormEdit = $map['disable_form_edit'];
        }
        if(isset($map['disable_stop_process_button'])){
            $model->disableStopProcessButton = $map['disable_stop_process_button'];
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
        if(isset($map['fake_mode'])){
            $model->fakeMode = $map['fake_mode'];
        }
        if(isset($map['template_edit_url'])){
            $model->templateEditUrl = $map['template_edit_url'];
        }
        if(isset($map['hidden'])){
            $model->hidden = $map['hidden'];
        }
        if(isset($map['process_config'])){
            $model->processConfig = processConfig::fromMap($map['process_config']);
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
     * @description 废弃，请使用process_config.disable_form_edit字段
     * @var bool
     */
    public $disableFormEdit;

    /**
     * @description true
     * @var bool
     */
    public $disableStopProcessButton;

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
     * @description true表示不带流程的模板
     * @var bool
     */
    public $fakeMode;

    /**
     * @description 废弃，请使用process_config.template_edit_url字段
     * @var string
     */
    public $templateEditUrl;

    /**
     * @description 废弃，请使用process_config.hidden字段
     * @var bool
     */
    public $hidden;

    /**
     * @description 模板配置属性
     * @var processConfig
     */
    public $processConfig;

}
