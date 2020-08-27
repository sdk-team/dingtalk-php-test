<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceTaskParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceTaskParams\task\extension;

class task extends Model {
    protected $_name = [
        'sourceId' => 'source_id',
        'isRecycled' => 'is_recycled',
        'gmtModified' => 'gmt_modified',
        'executorUserid' => 'executor_userid',
        'subject' => 'subject',
        'isArchived' => 'is_archived',
        'modifierUserid' => 'modifier_userid',
        'description' => 'description',
        'priority' => 'priority',
        'parentId' => 'parent_id',
        'taskTypeId' => 'task_type_id',
        'statusId' => 'status_id',
        'statusStage' => 'status_stage',
        'finishDate' => 'finish_date',
        'startDate' => 'start_date',
        'taskTypeCategory' => 'task_type_category',
        'planStartDate' => 'plan_start_date',
        'planFinishDate' => 'plan_finish_date',
        'trackerUserids' => 'tracker_userids',
        'extension' => 'extension',
        'corpId' => 'corp_id',
        'source' => 'source',
    ];
    public function validate() {
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('finishDate', $this->finishDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('startDate', $this->startDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('planStartDate', $this->planStartDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('planFinishDate', $this->planFinishDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->sourceId) {
            $res['source_id'] = $this->sourceId;
        }
        if (null !== $this->isRecycled) {
            $res['is_recycled'] = $this->isRecycled;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->executorUserid) {
            $res['executor_userid'] = $this->executorUserid;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->isArchived) {
            $res['is_archived'] = $this->isArchived;
        }
        if (null !== $this->modifierUserid) {
            $res['modifier_userid'] = $this->modifierUserid;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
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
        if (null !== $this->statusStage) {
            $res['status_stage'] = $this->statusStage;
        }
        if (null !== $this->finishDate) {
            $res['finish_date'] = $this->finishDate;
        }
        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
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
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return task
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['is_recycled'])){
            $model->isRecycled = $map['is_recycled'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['executor_userid'])){
            $model->executorUserid = $map['executor_userid'];
        }
        if(isset($map['subject'])){
            $model->subject = $map['subject'];
        }
        if(isset($map['is_archived'])){
            $model->isArchived = $map['is_archived'];
        }
        if(isset($map['modifier_userid'])){
            $model->modifierUserid = $map['modifier_userid'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['priority'])){
            $model->priority = $map['priority'];
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
        if(isset($map['status_stage'])){
            $model->statusStage = $map['status_stage'];
        }
        if(isset($map['finish_date'])){
            $model->finishDate = $map['finish_date'];
        }
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
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
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        return $model;
    }
    /**
     * @description 来源id
     * @var string
     */
    public $sourceId;

    /**
     * @description 是否放入回收站
     * @var bool
     */
    public $isRecycled;

    /**
     * @description 修改时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 执行者id（传null不更新，传空串则清空原值）
     * @var string
     */
    public $executorUserid;

    /**
     * @description 标题
     * @var string
     */
    public $subject;

    /**
     * @description 是否归档
     * @var bool
     */
    public $isArchived;

    /**
     * @description 更新者id
     * @var string
     */
    public $modifierUserid;

    /**
     * @description 描述（传null不更新，传空串则清空原值）
     * @var string
     */
    public $description;

    /**
     * @description 优先级
     * @var int
     */
    public $priority;

    /**
     * @description 父任务id
     * @var string
     */
    public $parentId;

    /**
     * @description 任务类型id
     * @var int
     */
    public $taskTypeId;

    /**
     * @description 工作流状态id
     * @var int
     */
    public $statusId;

    /**
     * @description 状态阶段: 开始阶段(0)，进行阶段(1)，完成阶段(2)
     * @var int
     */
    public $statusStage;

    /**
     * @description 完成时间（传null不更新，传Date(0)，即1970-01-01T08:00:00.000+08:00则清空原值）
     * @var string
     */
    public $finishDate;

    /**
     * @description 开始日期（传null不更新，传Date(0)，即1970-01-01T08:00:00.000+08:00则清空原值）
     * @var string
     */
    public $startDate;

    /**
     * @description 任务类型分类:// 任务 TASK("task"),     // 需求     REQ("req"),     // 缺陷     BUG("bug"),     // 风险     RISK("risk"),     // 工作项     WORKITEM("workitem")
     * @var string
     */
    public $taskTypeCategory;

    /**
     * @description 计划开始时间（传null不更新，传Date(0)，即1970-01-01T08:00:00.000+08:00则清空原值）
     * @var string
     */
    public $planStartDate;

    /**
     * @description 计划结束时间（传null不更新，传Date(0)，即1970-01-01T08:00:00.000+08:00则清空原值）
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
     * @description 任务所属项目(虚拟企业），基于项目空间的项目
     * @var string
     */
    public $corpId;

    /**
     * @description 任务来源source
     * @var string
     */
    public $source;

}
