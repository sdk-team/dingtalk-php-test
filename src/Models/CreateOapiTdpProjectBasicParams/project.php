<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiTdpProjectBasicParams;

use AlibabaCloud\Tea\Model;

class project extends Model {
    protected $_name = [
        'sourceId' => 'source_id',
        'isRecycled' => 'is_recycled',
        'identifier' => 'identifier',
        'gmtModified' => 'gmt_modified',
        'visibility' => 'visibility',
        'isArchived' => 'is_archived',
        'icon' => 'icon',
        'creatorUserid' => 'creator_userid',
        'modifierUserid' => 'modifier_userid',
        'description' => 'description',
        'source' => 'source',
        'gmtCreate' => 'gmt_create',
        'parentId' => 'parent_id',
        'name' => 'name',
    ];
    public function validate() {
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validateRequired('creatorUserid', $this->creatorUserid, true);
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->sourceId) {
            $res['source_id'] = $this->sourceId;
        }
        if (null !== $this->isRecycled) {
            $res['is_recycled'] = $this->isRecycled;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->visibility) {
            $res['visibility'] = $this->visibility;
        }
        if (null !== $this->isArchived) {
            $res['is_archived'] = $this->isArchived;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->creatorUserid) {
            $res['creator_userid'] = $this->creatorUserid;
        }
        if (null !== $this->modifierUserid) {
            $res['modifier_userid'] = $this->modifierUserid;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->parentId) {
            $res['parent_id'] = $this->parentId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return project
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['is_recycled'])){
            $model->isRecycled = $map['is_recycled'];
        }
        if(isset($map['identifier'])){
            $model->identifier = $map['identifier'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['visibility'])){
            $model->visibility = $map['visibility'];
        }
        if(isset($map['is_archived'])){
            $model->isArchived = $map['is_archived'];
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['creator_userid'])){
            $model->creatorUserid = $map['creator_userid'];
        }
        if(isset($map['modifier_userid'])){
            $model->modifierUserid = $map['modifier_userid'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['parent_id'])){
            $model->parentId = $map['parent_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 此字段用于数据迁移的场景，表示项目在源系统中的唯一ID，ISV接入时必填，用于跳转至各自的项目详情页
     * @var string
     */
    public $sourceId;

    /**
     * @description 是否放入回收站
     * @var bool
     */
    public $isRecycled;

    /**
     * @description 项目类型identifier
     * @var string
     */
    public $identifier;

    /**
     * @description 修改时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 项目可见范围
     * @var string
     */
    public $visibility;

    /**
     * @description 是否归档
     * @var bool
     */
    public $isArchived;

    /**
     * @description 项目图标
     * @var string
     */
    public $icon;

    /**
     * @description 创建者id, 传staffId（工号）
     * @var string
     */
    public $creatorUserid;

    /**
     * @description 更新者id, 传staffId（工号）
     * @var string
     */
    public $modifierUserid;

    /**
     * @description 项目描述
     * @var string
     */
    public $description;

    /**
     * @description 来源
     * @var string
     */
    public $source;

    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 父项目ID
     * @var string
     */
    public $parentId;

    /**
     * @description 项目名称
     * @var string
     */
    public $name;

}
