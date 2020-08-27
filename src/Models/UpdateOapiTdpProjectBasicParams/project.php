<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiTdpProjectBasicParams;

use AlibabaCloud\Tea\Model;

class project extends Model {
    protected $_name = [
        'isRecycled' => 'is_recycled',
        'gmtModified' => 'gmt_modified',
        'isArchived' => 'is_archived',
        'modifierUserid' => 'modifier_userid',
        'name' => 'name',
        'description' => 'description',
        'parentId' => 'parent_id',
        'identifier' => 'identifier',
        'visibility' => 'visibility',
        'icon' => 'icon',
    ];
    public function validate() {
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->isRecycled) {
            $res['is_recycled'] = $this->isRecycled;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->isArchived) {
            $res['is_archived'] = $this->isArchived;
        }
        if (null !== $this->modifierUserid) {
            $res['modifier_userid'] = $this->modifierUserid;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->parentId) {
            $res['parent_id'] = $this->parentId;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->visibility) {
            $res['visibility'] = $this->visibility;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return project
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['is_recycled'])){
            $model->isRecycled = $map['is_recycled'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['is_archived'])){
            $model->isArchived = $map['is_archived'];
        }
        if(isset($map['modifier_userid'])){
            $model->modifierUserid = $map['modifier_userid'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['parent_id'])){
            $model->parentId = $map['parent_id'];
        }
        if(isset($map['identifier'])){
            $model->identifier = $map['identifier'];
        }
        if(isset($map['visibility'])){
            $model->visibility = $map['visibility'];
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        return $model;
    }
    /**
     * @description 是否放入回收站
     * @var bool
     */
    public $isRecycled;

    /**
     * @description 更新时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 是否归档
     * @var bool
     */
    public $isArchived;

    /**
     * @description 更新者id, 传staffId（工号）
     * @var string
     */
    public $modifierUserid;

    /**
     * @description 项目名称
     * @var string
     */
    public $name;

    /**
     * @description 项目描述
     * @var string
     */
    public $description;

    /**
     * @description 父项目ID
     * @var string
     */
    public $parentId;

    /**
     * @description 项目类型
     * @var string
     */
    public $identifier;

    /**
     * @description 项目可见范围
     * @var string
     */
    public $visibility;

    /**
     * @description 项目图标
     * @var string
     */
    public $icon;

}
