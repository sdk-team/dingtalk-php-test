<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessParams\saveProcessRequest;

use AlibabaCloud\Tea\Model;

class processConfig extends Model {
    protected $_name = [
        'disableFormEdit' => 'disable_form_edit',
        'disableStopProcessButton' => 'disable_stop_process_button',
        'hidden' => 'hidden',
        'templateEditUrl' => 'template_edit_url',
        'disableDeleteProcess' => 'disable_delete_process',
        'disableResubmit' => 'disable_resubmit',
        'disableHomepage' => 'disable_homepage',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->disableFormEdit) {
            $res['disable_form_edit'] = $this->disableFormEdit;
        }
        if (null !== $this->disableStopProcessButton) {
            $res['disable_stop_process_button'] = $this->disableStopProcessButton;
        }
        if (null !== $this->hidden) {
            $res['hidden'] = $this->hidden;
        }
        if (null !== $this->templateEditUrl) {
            $res['template_edit_url'] = $this->templateEditUrl;
        }
        if (null !== $this->disableDeleteProcess) {
            $res['disable_delete_process'] = $this->disableDeleteProcess;
        }
        if (null !== $this->disableResubmit) {
            $res['disable_resubmit'] = $this->disableResubmit;
        }
        if (null !== $this->disableHomepage) {
            $res['disable_homepage'] = $this->disableHomepage;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return processConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['disable_form_edit'])){
            $model->disableFormEdit = $map['disable_form_edit'];
        }
        if(isset($map['disable_stop_process_button'])){
            $model->disableStopProcessButton = $map['disable_stop_process_button'];
        }
        if(isset($map['hidden'])){
            $model->hidden = $map['hidden'];
        }
        if(isset($map['template_edit_url'])){
            $model->templateEditUrl = $map['template_edit_url'];
        }
        if(isset($map['disable_delete_process'])){
            $model->disableDeleteProcess = $map['disable_delete_process'];
        }
        if(isset($map['disable_resubmit'])){
            $model->disableResubmit = $map['disable_resubmit'];
        }
        if(isset($map['disable_homepage'])){
            $model->disableHomepage = $map['disable_homepage'];
        }
        return $model;
    }
    /**
     * @description 是否允许表单在审批管理后台可编辑。true表示不可以
     * @var bool
     */
    public $disableFormEdit;

    /**
     * @description 是否在审批后台禁用停用操作
     * @var bool
     */
    public $disableStopProcessButton;

    /**
     * @description 设置模板是否隐藏，true表示隐藏
     * @var bool
     */
    public $hidden;

    /**
     * @description 审批模板编辑跳转页。当fake_mode为true时，此参数失效。
     * @var string
     */
    public $templateEditUrl;

    /**
     * @description 是否在审批后台禁用删除操作
     * @var bool
     */
    public $disableDeleteProcess;

    /**
     * @description 是否在审批详情页禁用再次提交操作
     * @var bool
     */
    public $disableResubmit;

    /**
     * @description 是否在审批首页/工作台屏蔽模板
     * @var bool
     */
    public $disableHomepage;

}
