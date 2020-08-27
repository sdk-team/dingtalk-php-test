<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCrmMenuResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCrmMenuResponseBody\result\children;

class result extends Model {
    protected $_name = [
        'formUuid' => 'form_uuid',
        'parentId' => 'parent_id',
        'name' => 'name',
        'listOrder' => 'list_order',
        'navType' => 'nav_type',
        'isNew' => 'is_new',
        'mobileHidden' => 'mobile_hidden',
        'pcHidden' => 'pc_hidden',
        'linkUrl' => 'link_url',
        'icon' => 'icon',
        'children' => 'children',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->formUuid) {
            $res['form_uuid'] = $this->formUuid;
        }
        if (null !== $this->parentId) {
            $res['parent_id'] = $this->parentId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->listOrder) {
            $res['list_order'] = $this->listOrder;
        }
        if (null !== $this->navType) {
            $res['nav_type'] = $this->navType;
        }
        if (null !== $this->isNew) {
            $res['is_new'] = $this->isNew;
        }
        if (null !== $this->mobileHidden) {
            $res['mobile_hidden'] = $this->mobileHidden;
        }
        if (null !== $this->pcHidden) {
            $res['pc_hidden'] = $this->pcHidden;
        }
        if (null !== $this->linkUrl) {
            $res['link_url'] = $this->linkUrl;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->children) {
            $res['children'] = [];
            if(null !== $this->children && is_array($this->children)){
                $n = 0;
                foreach($this->children as $item){
                    $res['children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['form_uuid'])){
            $model->formUuid = $map['form_uuid'];
        }
        if(isset($map['parent_id'])){
            $model->parentId = $map['parent_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['list_order'])){
            $model->listOrder = $map['list_order'];
        }
        if(isset($map['nav_type'])){
            $model->navType = $map['nav_type'];
        }
        if(isset($map['is_new'])){
            $model->isNew = $map['is_new'];
        }
        if(isset($map['mobile_hidden'])){
            $model->mobileHidden = $map['mobile_hidden'];
        }
        if(isset($map['pc_hidden'])){
            $model->pcHidden = $map['pc_hidden'];
        }
        if(isset($map['link_url'])){
            $model->linkUrl = $map['link_url'];
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['children'])){
            if(!empty($map['children'])){
                $model->children = [];
                $n = 0;
                foreach($map['children'] as $item) {
                    $model->children[$n++] = null !== $item ? children::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 表单id 如果非表单类菜单，可为空
     * @var string
     */
    public $formUuid;

    /**
     * @description 树形结构 父菜单id
     * @var int
     */
    public $parentId;

    /**
     * @description 菜单名称
     * @var string
     */
    public $name;

    /**
     * @description 菜单排序序号
     * @var int
     */
    public $listOrder;

    /**
     * @description 导航类型：sw_form：表单类到导航 group：分组类  outLinker：链接跳转
     * @var string
     */
    public $navType;

    /**
     * @description 是否新打开页面 0:不打开 1：新打开
     * @var int
     */
    public $isNew;

    /**
     * @description 1:隐藏 0：不隐藏
     * @var int
     */
    public $mobileHidden;

    /**
     * @description 1:隐藏 0：不隐藏
     * @var int
     */
    public $pcHidden;

    /**
     * @description 链接地址
     * @var string
     */
    public $linkUrl;

    /**
     * @description 图标地址
     * @var string
     */
    public $icon;

    /**
     * @description 子菜单列表
     * @var array
     */
    public $children;

}
