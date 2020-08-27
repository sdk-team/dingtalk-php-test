<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbydayOapiAttendanceScheduleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'checkType' => 'check_type',
        'approveType' => 'approve_type',
        'gmtModified' => 'gmt_modified',
        'planCheckTime' => 'plan_check_time',
        'corpId' => 'corp_id',
        'checkDateTime' => 'check_date_time',
        'baseCheckTime' => 'base_check_time',
        'groupId' => 'group_id',
        'className' => 'class_name',
        'gmtCreate' => 'gmt_create',
        'userId' => 'user_id',
        'approveBizType' => 'approve_biz_type',
        'approveId' => 'approve_id',
        'classSettingId' => 'class_setting_id',
        'approveTagName' => 'approve_tag_name',
        'features' => 'features',
        'classId' => 'class_id',
        'checkStatus' => 'check_status',
        'workDate' => 'work_date',
        'checkEndTime' => 'check_end_time',
        'isRest' => 'is_rest',
        'checkBeginTime' => 'check_begin_time',
        'id' => 'id',
        'realPlanTime' => 'real_plan_time',
    ];
    public function validate() {
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('planCheckTime', $this->planCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('checkDateTime', $this->checkDateTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('baseCheckTime', $this->baseCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('workDate', $this->workDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('checkEndTime', $this->checkEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('checkBeginTime', $this->checkBeginTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('realPlanTime', $this->realPlanTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        if (null !== $this->approveType) {
            $res['approve_type'] = $this->approveType;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->planCheckTime) {
            $res['plan_check_time'] = $this->planCheckTime;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->checkDateTime) {
            $res['check_date_time'] = $this->checkDateTime;
        }
        if (null !== $this->baseCheckTime) {
            $res['base_check_time'] = $this->baseCheckTime;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->className) {
            $res['class_name'] = $this->className;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->approveBizType) {
            $res['approve_biz_type'] = $this->approveBizType;
        }
        if (null !== $this->approveId) {
            $res['approve_id'] = $this->approveId;
        }
        if (null !== $this->classSettingId) {
            $res['class_setting_id'] = $this->classSettingId;
        }
        if (null !== $this->approveTagName) {
            $res['approve_tag_name'] = $this->approveTagName;
        }
        if (null !== $this->features) {
            $res['features'] = $this->features;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->checkStatus) {
            $res['check_status'] = $this->checkStatus;
        }
        if (null !== $this->workDate) {
            $res['work_date'] = $this->workDate;
        }
        if (null !== $this->checkEndTime) {
            $res['check_end_time'] = $this->checkEndTime;
        }
        if (null !== $this->isRest) {
            $res['is_rest'] = $this->isRest;
        }
        if (null !== $this->checkBeginTime) {
            $res['check_begin_time'] = $this->checkBeginTime;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->realPlanTime) {
            $res['real_plan_time'] = $this->realPlanTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        if(isset($map['approve_type'])){
            $model->approveType = $map['approve_type'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['plan_check_time'])){
            $model->planCheckTime = $map['plan_check_time'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['check_date_time'])){
            $model->checkDateTime = $map['check_date_time'];
        }
        if(isset($map['base_check_time'])){
            $model->baseCheckTime = $map['base_check_time'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['class_name'])){
            $model->className = $map['class_name'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['user_id'])){
            $model->userId = $map['user_id'];
        }
        if(isset($map['approve_biz_type'])){
            $model->approveBizType = $map['approve_biz_type'];
        }
        if(isset($map['approve_id'])){
            $model->approveId = $map['approve_id'];
        }
        if(isset($map['class_setting_id'])){
            $model->classSettingId = $map['class_setting_id'];
        }
        if(isset($map['approve_tag_name'])){
            $model->approveTagName = $map['approve_tag_name'];
        }
        if(isset($map['features'])){
            $model->features = $map['features'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['check_status'])){
            $model->checkStatus = $map['check_status'];
        }
        if(isset($map['work_date'])){
            $model->workDate = $map['work_date'];
        }
        if(isset($map['check_end_time'])){
            $model->checkEndTime = $map['check_end_time'];
        }
        if(isset($map['is_rest'])){
            $model->isRest = $map['is_rest'];
        }
        if(isset($map['check_begin_time'])){
            $model->checkBeginTime = $map['check_begin_time'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['real_plan_time'])){
            $model->realPlanTime = $map['real_plan_time'];
        }
        return $model;
    }
    /**
     * @description 考勤类型，上班/下班
     * @var string
     */
    public $checkType;

    /**
     * @description 审批类型
     * @var string
     */
    public $approveType;

    /**
     * @description 更新时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 计划打卡时间
     * @var string
     */
    public $planCheckTime;

    /**
     * @description 公司id
     * @var string
     */
    public $corpId;

    /**
     * @description 打卡时间
     * @var string
     */
    public $checkDateTime;

    /**
     * @description 迟到早退线
     * @var string
     */
    public $baseCheckTime;

    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

    /**
     * @description 班次名称
     * @var string
     */
    public $className;

    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 用户userId
     * @var string
     */
    public $userId;

    /**
     * @description 审批类型
     * @var int
     */
    public $approveBizType;

    /**
     * @description 审批单id
     * @var int
     */
    public $approveId;

    /**
     * @description 班次version
     * @var int
     */
    public $classSettingId;

    /**
     * @description 审批单标签名
     * @var string
     */
    public $approveTagName;

    /**
     * @description 扩展字段
     * @var string
     */
    public $features;

    /**
     * @description 班次id
     * @var int
     */
    public $classId;

    /**
     * @description 打卡状态
     * @var string
     */
    public $checkStatus;

    /**
     * @description 工作天
     * @var string
     */
    public $workDate;

    /**
     * @description 结束打卡时间
     * @var string
     */
    public $checkEndTime;

    /**
     * @description 是否休息
     * @var string
     */
    public $isRest;

    /**
     * @description 开始打卡时间
     * @var string
     */
    public $checkBeginTime;

    /**
     * @description id
     * @var int
     */
    public $id;

    /**
     * @description 根据弹性、打卡结果等综合计算的卡点，与个人月历页保持一致
     * @var string
     */
    public $realPlanTime;

}
