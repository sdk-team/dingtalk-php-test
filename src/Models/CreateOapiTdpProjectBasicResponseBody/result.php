<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiTdpProjectBasicResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'gmtCreate' => 'gmt_create',
        'modifierUserid' => 'modifier_userid',
        'creatorUserid' => 'creator_userid',
        'bizTag' => 'biz_tag',
        'description' => 'description',
        'isRecycled' => 'is_recycled',
        'isArchived' => 'is_archived',
        'sourceId' => 'source_id',
        'parentId' => 'parent_id',
        'gmtModified' => 'gmt_modified',
        'belongCorpId' => 'belong_corp_id',
        'projectId' => 'project_id',
        'virtualDingOrgid' => 'virtual_ding_orgid',
        'visibility' => 'visibility',
        'icon' => 'icon',
        'source' => 'source',
        'name' => 'name',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->modifierUserid) {
            $res['modifier_userid'] = $this->modifierUserid;
        }
        if (null !== $this->creatorUserid) {
            $res['creator_userid'] = $this->creatorUserid;
        }
        if (null !== $this->bizTag) {
            $res['biz_tag'] = $this->bizTag;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->isRecycled) {
            $res['is_recycled'] = $this->isRecycled;
        }
        if (null !== $this->isArchived) {
            $res['is_archived'] = $this->isArchived;
        }
        if (null !== $this->sourceId) {
            $res['source_id'] = $this->sourceId;
        }
        if (null !== $this->parentId) {
            $res['parent_id'] = $this->parentId;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->belongCorpId) {
            $res['belong_corp_id'] = $this->belongCorpId;
        }
        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }
        if (null !== $this->virtualDingOrgid) {
            $res['virtual_ding_orgid'] = $this->virtualDingOrgid;
        }
        if (null !== $this->visibility) {
            $res['visibility'] = $this->visibility;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['modifier_userid'])){
            $model->modifierUserid = $map['modifier_userid'];
        }
        if(isset($map['creator_userid'])){
            $model->creatorUserid = $map['creator_userid'];
        }
        if(isset($map['biz_tag'])){
            $model->bizTag = $map['biz_tag'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['is_recycled'])){
            $model->isRecycled = $map['is_recycled'];
        }
        if(isset($map['is_archived'])){
            $model->isArchived = $map['is_archived'];
        }
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['parent_id'])){
            $model->parentId = $map['parent_id'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['belong_corp_id'])){
            $model->belongCorpId = $map['belong_corp_id'];
        }
        if(isset($map['project_id'])){
            $model->projectId = $map['project_id'];
        }
        if(isset($map['virtual_ding_orgid'])){
            $model->virtualDingOrgid = $map['virtual_ding_orgid'];
        }
        if(isset($map['visibility'])){
            $model->visibility = $map['visibility'];
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 更新者id, 传staffId（工号）
     * @var string
     */
    public $modifierUserid;

    /**
     * @description 创建者id, 传staffId（工号）
     * @var string
     */
    public $creatorUserid;

    /**
     * @description 业务标识
     * @var string
     */
    public $bizTag;

    /**
     * @description 项目描述
     * @var string
     */
    public $description;

    /**
     * @description 是否放入回收站
     * @var bool
     */
    public $isRecycled;

    /**
     * @description 是否归档
     * @var bool
     */
    public $isArchived;

    /**
     * @description 此字段用于数据迁移的场景，表示任务在源系统中的唯一ID
     * @var string
     */
    public $sourceId;

    /**
     * @description 父项目id
     * @var string
     */
    public $parentId;

    /**
     * @description 修改时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 归属企业id
     * @var string
     */
    public $belongCorpId;

    /**
     * @description 项目ID
     * @var string
     */
    public $projectId;

    /**
     * @description 关联的虚拟组织ID
     * @var string
     */
    public $virtualDingOrgid;

    /**
     * @description 项目可见性
     * @var string
     */
    public $visibility;

    /**
     * @description 项目图标
     * @var string
     */
    public $icon;

    /**
     * @description 来源
     * @var string
     */
    public $source;

    /**
     * @description 项目名称
     * @var string
     */
    public $name;

}
