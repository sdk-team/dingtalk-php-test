<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\MigrateOapiWorkspaceTaskResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\MigrateOapiWorkspaceTaskResponseBody\result\extension;

class result extends Model {
    protected $_name = [
        'gmtCreate' => 'gmt_create',
        'modifierUserid' => 'modifier_userid',
        'creatorUserid' => 'creator_userid',
        'bizTag' => 'biz_tag',
        'priority' => 'priority',
        'description' => 'description',
        'finishDate' => 'finish_date',
        'startDate' => 'start_date',
        'isRecycled' => 'is_recycled',
        'isArchived' => 'is_archived',
        'statusStage' => 'status_stage',
        'sourceId' => 'source_id',
        'parentId' => 'parent_id',
        'taskTypeId' => 'task_type_id',
        'statusId' => 'status_id',
        'executorUserid' => 'executor_userid',
        'subject' => 'subject',
        'gmtModified' => 'gmt_modified',
        'belongCorpId' => 'belong_corp_id',
        'corpId' => 'corp_id',
        'taskId' => 'task_id',
        'taskTypeCategory' => 'task_type_category',
        'planStartDate' => 'plan_start_date',
        'planFinishDate' => 'plan_finish_date',
        'trackerUserids' => 'tracker_userids',
        'extension' => 'extension',
        'source' => 'source',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('finishDate', $this->finishDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('startDate', $this->startDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('planStartDate', $this->planStartDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('planFinishDate', $this->planFinishDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
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
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->finishDate) {
            $res['finish_date'] = $this->finishDate;
        }
        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }
        if (null !== $this->isRecycled) {
            $res['is_recycled'] = $this->isRecycled;
        }
        if (null !== $this->isArchived) {
            $res['is_archived'] = $this->isArchived;
        }
        if (null !== $this->statusStage) {
            $res['status_stage'] = $this->statusStage;
        }
        if (null !== $this->sourceId) {
            $res['source_id'] = $this->sourceId;
        }
        if (null !== $this->parentId) {
            $res['parent_id'] = $this->parentId;
        }
        if (null !== $this->taskTypeId) {
            $res['task_type_id'] = $this->taskTypeId;
        }
        if (null !== $this->statusId) {
            $res['status_id'] = $this->statusId;
        }
        if (null !== $this->executorUserid) {
            $res['executor_userid'] = $this->executorUserid;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->belongCorpId) {
            $res['belong_corp_id'] = $this->belongCorpId;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->taskTypeCategory) {
            $res['task_type_category'] = $this->taskTypeCategory;
        }
        if (null !== $this->planStartDate) {
            $res['plan_start_date'] = $this->planStartDate;
        }
        if (null !== $this->planFinishDate) {
            $res['plan_finish_date'] = $this->planFinishDate;
        }
        if (null !== $this->trackerUserids) {
            $res['tracker_userids'] = $this->trackerUserids;
        }
        if (null !== $this->extension) {
            $res['extension'] = null !== $this->extension ? $this->extension->toMap() : null;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if(isset($map['priority'])){
            $model->priority = $map['priority'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['finish_date'])){
            $model->finishDate = $map['finish_date'];
        }
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
        }
        if(isset($map['is_recycled'])){
            $model->isRecycled = $map['is_recycled'];
        }
        if(isset($map['is_archived'])){
            $model->isArchived = $map['is_archived'];
        }
        if(isset($map['status_stage'])){
            $model->statusStage = $map['status_stage'];
        }
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['parent_id'])){
            $model->parentId = $map['parent_id'];
        }
        if(isset($map['task_type_id'])){
            $model->taskTypeId = $map['task_type_id'];
        }
        if(isset($map['status_id'])){
            $model->statusId = $map['status_id'];
        }
        if(isset($map['executor_userid'])){
            $model->executorUserid = $map['executor_userid'];
        }
        if(isset($map['subject'])){
            $model->subject = $map['subject'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['belong_corp_id'])){
            $model->belongCorpId = $map['belong_corp_id'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        if(isset($map['task_type_category'])){
            $model->taskTypeCategory = $map['task_type_category'];
        }
        if(isset($map['plan_start_date'])){
            $model->planStartDate = $map['plan_start_date'];
        }
        if(isset($map['plan_finish_date'])){
            $model->planFinishDate = $map['plan_finish_date'];
        }
        if(isset($map['tracker_userids'])){
            if(!empty($map['tracker_userids'])){
                $model->trackerUserids = $map['tracker_userids'];
            }
        }
        if(isset($map['extension'])){
            $model->extension = extension::fromMap($map['extension']);
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
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
     * @description 优先级, 较低:10, 普通:20, 紧急:30, 非常紧急:40
     * @var int
     */
    public $priority;

    /**
     * @description 任务描述
     * @var string
     */
    public $description;

    /**
     * @description 完成时间
     * @var string
     */
    public $finishDate;

    /**
     * @description 开始时间
     * @var string
     */
    public $startDate;

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
     * @description 状态阶段: 开始阶段(0)，进行阶段(1)，完成阶段(2)
     * @var int
     */
    public $statusStage;

    /**
     * @description 此字段用于数据迁移的场景，表示任务在源系统中的唯一ID
     * @var string
     */
    public $sourceId;

    /**
     * @description 父任务id
     * @var string
     */
    public $parentId;

    /**
     * @description 任务类型id，任务类型，可以不传
     * @var int
     */
    public $taskTypeId;

    /**
     * @description 状态id，工作流状态, 可以为空
     * @var int
     */
    public $statusId;

    /**
     * @description 执行者id, 传staffId（工号）
     * @var string
     */
    public $executorUserid;

    /**
     * @description 标题
     * @var string
     */
    public $subject;

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
     * @description 任务所属项目(虚拟企业），基于项目空间的项目
     * @var string
     */
    public $corpId;

    /**
     * @description 任务id
     * @var string
     */
    public $taskId;

    /**
     * @description 任务类型分类:// 任务 TASK("task"),     // 需求     REQ("req"),     // 缺陷     BUG("bug"),     // 风险     RISK("risk"),     // 工作项     WORKITEM("workitem")
     * @var string
     */
    public $taskTypeCategory;

    /**
     * @description 任务计划开始时间
     * @var string
     */
    public $planStartDate;

    /**
     * @description 任务计划完成时间
     * @var string
     */
    public $planFinishDate;

    /**
     * @description 任务参与者列表
     * @var array
     */
    public $trackerUserids;

    /**
     * @description 任务的扩展字段
     * @var extension
     */
    public $extension;

    /**
     * @description 任务来源source
     * @var string
     */
    public $source;

}
