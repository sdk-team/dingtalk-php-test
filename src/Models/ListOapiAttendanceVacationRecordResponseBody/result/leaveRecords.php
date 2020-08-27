<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceVacationRecordResponseBody\result;

use AlibabaCloud\Tea\Model;

class leaveRecords extends Model {
    protected $_name = [
        'userid' => 'userid',
        'leaveCode' => 'leave_code',
        'recordId' => 'record_id',
        'quotaId' => 'quota_id',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'parentRecordId' => 'parent_record_id',
        'leaveViewUnit' => 'leave_view_unit',
        'calType' => 'cal_type',
        'leaveReason' => 'leave_reason',
        'leaveStatus' => 'leave_status',
        'leaveRecordType' => 'leave_record_type',
        'recordNumPerDay' => 'record_num_per_day',
        'recordNumPerHour' => 'record_num_per_hour',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->leaveCode) {
            $res['leave_code'] = $this->leaveCode;
        }
        if (null !== $this->recordId) {
            $res['record_id'] = $this->recordId;
        }
        if (null !== $this->quotaId) {
            $res['quota_id'] = $this->quotaId;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->parentRecordId) {
            $res['parent_record_id'] = $this->parentRecordId;
        }
        if (null !== $this->leaveViewUnit) {
            $res['leave_view_unit'] = $this->leaveViewUnit;
        }
        if (null !== $this->calType) {
            $res['cal_type'] = $this->calType;
        }
        if (null !== $this->leaveReason) {
            $res['leave_reason'] = $this->leaveReason;
        }
        if (null !== $this->leaveStatus) {
            $res['leave_status'] = $this->leaveStatus;
        }
        if (null !== $this->leaveRecordType) {
            $res['leave_record_type'] = $this->leaveRecordType;
        }
        if (null !== $this->recordNumPerDay) {
            $res['record_num_per_day'] = $this->recordNumPerDay;
        }
        if (null !== $this->recordNumPerHour) {
            $res['record_num_per_hour'] = $this->recordNumPerHour;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return leaveRecords
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['leave_code'])){
            $model->leaveCode = $map['leave_code'];
        }
        if(isset($map['record_id'])){
            $model->recordId = $map['record_id'];
        }
        if(isset($map['quota_id'])){
            $model->quotaId = $map['quota_id'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['parent_record_id'])){
            $model->parentRecordId = $map['parent_record_id'];
        }
        if(isset($map['leave_view_unit'])){
            $model->leaveViewUnit = $map['leave_view_unit'];
        }
        if(isset($map['cal_type'])){
            $model->calType = $map['cal_type'];
        }
        if(isset($map['leave_reason'])){
            $model->leaveReason = $map['leave_reason'];
        }
        if(isset($map['leave_status'])){
            $model->leaveStatus = $map['leave_status'];
        }
        if(isset($map['leave_record_type'])){
            $model->leaveRecordType = $map['leave_record_type'];
        }
        if(isset($map['record_num_per_day'])){
            $model->recordNumPerDay = $map['record_num_per_day'];
        }
        if(isset($map['record_num_per_hour'])){
            $model->recordNumPerHour = $map['record_num_per_hour'];
        }
        return $model;
    }
    /**
     * @description 员工ID
     * @var string
     */
    public $userid;

    /**
     * @description 假期类型唯一标识
     * @var string
     */
    public $leaveCode;

    /**
     * @description 假期消费记录唯一标识
     * @var string
     */
    public $recordId;

    /**
     * @description 假期额度唯一标识
     * @var string
     */
    public $quotaId;

    /**
     * @description 额度有效期开始时间(毫秒级时间戳)
     * @var int
     */
    public $startTime;

    /**
     * @description 额度有效期结束时间(毫秒级时间戳)
     * @var int
     */
    public $endTime;

    /**
     * @description 假期记录标识(扣减多条假期配额 该值不为空)
     * @var string
     */
    public $parentRecordId;

    /**
     * @description 显示单位(day hour 其中一种按天、小时计算)
     * @var string
     */
    public $leaveViewUnit;

    /**
     * @description 计算类型(add delete update 如果是请假则为null)
     * @var string
     */
    public $calType;

    /**
     * @description 原因
     * @var string
     */
    public $leaveReason;

    /**
     * @description 请假状态(请假申请 init 请假通过 success 请假被拒 refuse 请假撤销 abort 撤销已同意的请假单并通过 revoke其中一种)
     * @var string
     */
    public $leaveStatus;

    /**
     * @description 假期记录类型(leave update其中一种 请假还是更新配额)
     * @var string
     */
    public $leaveRecordType;

    /**
     * @description 单位以天计算的消费额度(假期类型按天计算该值不为空且按百分之一天折算 例如 100=1天)
     * @var int
     */
    public $recordNumPerDay;

    /**
     * @description 单位以小时计算的消费额度(假期类型按小时计算该值不为空且按百分之一小时折算 例如 100=1小时)
     * @var int
     */
    public $recordNumPerHour;

}
