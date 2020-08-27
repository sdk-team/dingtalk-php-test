<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceVacationQuotaResponseBody\result;

use AlibabaCloud\Tea\Model;

class leaveQuotas extends Model {
    protected $_name = [
        'userid' => 'userid',
        'leaveCode' => 'leave_code',
        'quotaCycle' => 'quota_cycle',
        'quotaId' => 'quota_id',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'quotaNumPerHour' => 'quota_num_per_hour',
        'quotaNumPerDay' => 'quota_num_per_day',
        'usedNumPerDay' => 'used_num_per_day',
        'usedNumPerHour' => 'used_num_per_hour',
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
        if (null !== $this->quotaCycle) {
            $res['quota_cycle'] = $this->quotaCycle;
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
        if (null !== $this->quotaNumPerHour) {
            $res['quota_num_per_hour'] = $this->quotaNumPerHour;
        }
        if (null !== $this->quotaNumPerDay) {
            $res['quota_num_per_day'] = $this->quotaNumPerDay;
        }
        if (null !== $this->usedNumPerDay) {
            $res['used_num_per_day'] = $this->usedNumPerDay;
        }
        if (null !== $this->usedNumPerHour) {
            $res['used_num_per_hour'] = $this->usedNumPerHour;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return leaveQuotas
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['leave_code'])){
            $model->leaveCode = $map['leave_code'];
        }
        if(isset($map['quota_cycle'])){
            $model->quotaCycle = $map['quota_cycle'];
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
        if(isset($map['quota_num_per_hour'])){
            $model->quotaNumPerHour = $map['quota_num_per_hour'];
        }
        if(isset($map['quota_num_per_day'])){
            $model->quotaNumPerDay = $map['quota_num_per_day'];
        }
        if(isset($map['used_num_per_day'])){
            $model->usedNumPerDay = $map['used_num_per_day'];
        }
        if(isset($map['used_num_per_hour'])){
            $model->usedNumPerHour = $map['used_num_per_hour'];
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
     * @description 额度所对应的周期
     * @var string
     */
    public $quotaCycle;

    /**
     * @description 配额唯一标记
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
     * @description 单位以天计算的额度总数(假期类型按天计算该值不为空且按百分之一天折算 例如 1000=10天)
     * @var int
     */
    public $quotaNumPerHour;

    /**
     * @description 单位以小时计算的额度总数(假期类型按小时计算该值不为空且按百分之一小时折算 例如 1000=10小时)
     * @var int
     */
    public $quotaNumPerDay;

    /**
     * @description 单位以天计算的使用额度(假期类型按天计算该值不为空且按百分之一天折算 例如 100=1天)
     * @var int
     */
    public $usedNumPerDay;

    /**
     * @description 单位以小时计算的使用额度(假期类型按小时计算该值不为空且按百分之一小时折算 例如 100=1小时)
     * @var int
     */
    public $usedNumPerHour;

}
