<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\processVisibleList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\customSetting;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\formContent;

class request extends Model {
    protected $_name = [
        'icon' => 'icon',
        'processVisibleList' => 'process_visible_list',
        'memo' => 'memo',
        'content' => 'content',
        'name' => 'name',
        'customSetting' => 'custom_setting',
        'userid' => 'userid',
        'formContent' => 'form_content',
    ];
    public function validate() {
        Model::validateRequired('icon', $this->icon, true);
        Model::validateRequired('memo', $this->memo, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('customSetting', $this->customSetting, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('formContent', $this->formContent, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->processVisibleList) {
            $res['process_visible_list'] = [];
            if(null !== $this->processVisibleList && is_array($this->processVisibleList)){
                $n = 0;
                foreach($this->processVisibleList as $item){
                    $res['process_visible_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->customSetting) {
            $res['custom_setting'] = null !== $this->customSetting ? $this->customSetting->toMap() : null;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->formContent) {
            $res['form_content'] = null !== $this->formContent ? $this->formContent->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['process_visible_list'])){
            if(!empty($map['process_visible_list'])){
                $model->processVisibleList = [];
                $n = 0;
                foreach($map['process_visible_list'] as $item) {
                    $model->processVisibleList[$n++] = null !== $item ? processVisibleList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['memo'])){
            $model->memo = $map['memo'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['custom_setting'])){
            $model->customSetting = customSetting::fromMap($map['custom_setting']);
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['form_content'])){
            $model->formContent = formContent::fromMap($map['form_content']);
        }
        return $model;
    }
    /**
     * @description 图标
     * @var string
     */
    public $icon;

    /**
     * @description 可见范围
     * @var array
     */
    public $processVisibleList;

    /**
     * @description 提示
     * @var string
     */
    public $memo;

    /**
     * @description 控件字符串
     * @var string
     */
    public $content;

    /**
     * @description 表单名称
     * @var string
     */
    public $name;

    /**
     * @description 表单设置
     * @var customSetting
     */
    public $customSetting;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 控件对象
     * @var formContent
     */
    public $formContent;

}
