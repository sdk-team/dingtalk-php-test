<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class FinishOapiAttendanceApproveParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'bizType' => 'biz_type',
        'fromTime' => 'from_time',
        'toTime' => 'to_time',
        'durationUnit' => 'duration_unit',
        'calculateModel' => 'calculate_model',
        'tagName' => 'tag_name',
        'subType' => 'sub_type',
        'approveId' => 'approve_id',
        'jumpUrl' => 'jump_url',
        'overtimeDuration' => 'overtime_duration',
        'overtimeToMore' => 'overtime_to_more',
    ];
    public function validate() {
        Model::validateMaxLength('tagName', $this->tagName, 20);
        Model::validateMaxLength('subType', $this->subType, 20);
        Model::validateMaxLength('approveId', $this->approveId, 100);
        Model::validateMaxLength('jumpUrl', $this->jumpUrl, 200);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->fromTime) {
            $res['from_time'] = $this->fromTime;
        }
        if (null !== $this->toTime) {
            $res['to_time'] = $this->toTime;
        }
        if (null !== $this->durationUnit) {
            $res['duration_unit'] = $this->durationUnit;
        }
        if (null !== $this->calculateModel) {
            $res['calculate_model'] = $this->calculateModel;
        }
        if (null !== $this->tagName) {
            $res['tag_name'] = $this->tagName;
        }
        if (null !== $this->subType) {
            $res['sub_type'] = $this->subType;
        }
        if (null !== $this->approveId) {
            $res['approve_id'] = $this->approveId;
        }
        if (null !== $this->jumpUrl) {
            $res['jump_url'] = $this->jumpUrl;
        }
        if (null !== $this->overtimeDuration) {
            $res['overtime_duration'] = $this->overtimeDuration;
        }
        if (null !== $this->overtimeToMore) {
            $res['overtime_to_more'] = $this->overtimeToMore;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return FinishOapiAttendanceApproveParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        if(isset($map['from_time'])){
            $model->fromTime = $map['from_time'];
        }
        if(isset($map['to_time'])){
            $model->toTime = $map['to_time'];
        }
        if(isset($map['duration_unit'])){
            $model->durationUnit = $map['duration_unit'];
        }
        if(isset($map['calculate_model'])){
            $model->calculateModel = $map['calculate_model'];
        }
        if(isset($map['tag_name'])){
            $model->tagName = $map['tag_name'];
        }
        if(isset($map['sub_type'])){
            $model->subType = $map['sub_type'];
        }
        if(isset($map['approve_id'])){
            $model->approveId = $map['approve_id'];
        }
        if(isset($map['jump_url'])){
            $model->jumpUrl = $map['jump_url'];
        }
        if(isset($map['overtime_duration'])){
            $model->overtimeDuration = $map['overtime_duration'];
        }
        if(isset($map['overtime_to_more'])){
            $model->overtimeToMore = $map['overtime_to_more'];
        }
        return $model;
    }
    /**
     * @description 员工的user_id
     * @var string
     */
    public $userid;

    /**
     * @description 审批单类型1:加班，2：外出、出差，3：请假
     * @var int
     */
    public $bizType;

    /**
     * @description 开始时间，支持的时间格式 2019-08-15/2019-08-15 AM/2019-08-15 12:43。开始时间不能早于当前时间前31天
     * @var string
     */
    public $fromTime;

    /**
     * @description 结束时间，支持的时间格式 2019-08-15/2019-08-15 AM/2019-08-15 12:43。结束时间减去开始时间的天数不能超过31天。biz_type为1时结束时间减去开始时间不能超过1天
     * @var string
     */
    public $toTime;

    /**
     * @description 时长单位，支持的day,halfDay,hour，biz_type为1时仅支持hour。时间格式必须与时长单位对应，2019-08-15对应day，2019-08-15  AM对应halfDay，2019-08-15 12:43对应hour
     * @var string
     */
    public $durationUnit;

    /**
     * @description 计算方法，0：按自然日计算，1：按工作日计算
     * @var int
     */
    public $calculateModel;

    /**
     * @description 审批单类型名称，最大长度20个字符
     * @var string
     */
    public $tagName;

    /**
     * @description 子类型名称，最大长度20个字符
     * @var string
     */
    public $subType;

    /**
     * @description 审批单全局唯一id，最大长度100个字符
     * @var string
     */
    public $approveId;

    /**
     * @description 审批单跳转地址，最大长度100个字符
     * @var string
     */
    public $jumpUrl;

    /**
     * @description biz_type为1时必传，加班时长单位小时
     * @var string
     */
    public $overtimeDuration;

    /**
     * @description biz_type为1时必传，1：加班转调休，2：加班转工资
     * @var int
     */
    public $overtimeToMore;

}
