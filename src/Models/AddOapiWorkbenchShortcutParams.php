<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddOapiWorkbenchShortcutParams extends Model {
    protected $_name = [
        'shortcutUri' => 'shortcut_uri',
        'icon' => 'icon',
        'appId' => 'app_id',
        'name' => 'name',
        'bizNo' => 'biz_no',
        'pcShortcutUri' => 'pc_shortcut_uri',
    ];
    public function validate() {
        Model::validateRequired('shortcutUri', $this->shortcutUri, true);
        Model::validateRequired('icon', $this->icon, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('bizNo', $this->bizNo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->shortcutUri) {
            $res['shortcut_uri'] = $this->shortcutUri;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->bizNo) {
            $res['biz_no'] = $this->bizNo;
        }
        if (null !== $this->pcShortcutUri) {
            $res['pc_shortcut_uri'] = $this->pcShortcutUri;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiWorkbenchShortcutParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['shortcut_uri'])){
            $model->shortcutUri = $map['shortcut_uri'];
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['app_id'])){
            $model->appId = $map['app_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['biz_no'])){
            $model->bizNo = $map['biz_no'];
        }
        if(isset($map['pc_shortcut_uri'])){
            $model->pcShortcutUri = $map['pc_shortcut_uri'];
        }
        return $model;
    }
    /**
     * @description 移动端快捷方式跳转地址(默认地址)
     * @var string
     */
    public $shortcutUri;

    /**
     * @description 图标Url
     * @var string
     */
    public $icon;

    /**
     * @description 微应用ID
     * @var string
     */
    public $appId;

    /**
     * @description 快捷方式名称
     * @var string
     */
    public $name;

    /**
     * @description 系统交互唯一业务号,ISV企业下唯一
     * @var string
     */
    public $bizNo;

    /**
     * @description PC端快捷方式跳转地址
     * @var string
     */
    public $pcShortcutUri;

}
