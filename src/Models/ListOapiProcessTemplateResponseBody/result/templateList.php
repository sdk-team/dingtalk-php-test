<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiProcessTemplateResponseBody\result;

use AlibabaCloud\Tea\Model;

class templateList extends Model {
    protected $_name = [
        'canModify' => 'can_modify',
        'formContent' => 'form_content',
        'iconUrl' => 'icon_url',
        'name' => 'name',
        'processCode' => 'process_code',
        'url' => 'url',
        'canBeUpgraded' => 'can_be_upgraded',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->canModify) {
            $res['can_modify'] = $this->canModify;
        }
        if (null !== $this->formContent) {
            $res['form_content'] = $this->formContent;
        }
        if (null !== $this->iconUrl) {
            $res['icon_url'] = $this->iconUrl;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->canBeUpgraded) {
            $res['can_be_upgraded'] = $this->canBeUpgraded;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return templateList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['can_modify'])){
            $model->canModify = $map['can_modify'];
        }
        if(isset($map['form_content'])){
            $model->formContent = $map['form_content'];
        }
        if(isset($map['icon_url'])){
            $model->iconUrl = $map['icon_url'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['can_be_upgraded'])){
            $model->canBeUpgraded = $map['can_be_upgraded'];
        }
        return $model;
    }
    /**
     * @description 是否有管理权限
     * @var bool
     */
    public $canModify;

    /**
     * @description 模板内容
     * @var string
     */
    public $formContent;

    /**
     * @description 模板图标url
     * @var string
     */
    public $iconUrl;

    /**
     * @description 模板名称
     * @var string
     */
    public $name;

    /**
     * @description 模板code
     * @var string
     */
    public $processCode;

    /**
     * @description 模板跳转地址
     * @var string
     */
    public $url;

    /**
     * @description 是否可升级，加入收款账户组件
     * @var bool
     */
    public $canBeUpgraded;

}
