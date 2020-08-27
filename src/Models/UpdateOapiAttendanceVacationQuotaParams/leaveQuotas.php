<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiAttendanceVacationQuotaParams;

use AlibabaCloud\Tea\Model;

class leaveQuotas extends Model {
    protected $_name = [
        'userid' => 'userid',
        'endTime' => 'end_time',
        'startTime' => 'start_time',
        'leaveCode' => 'leave_code',
        'reason' => 'reason',
        'quotaNumPerDay' => 'quota_num_per_day',
        'quotaNumPerHour' => 'quota_num_per_hour',
        'quotaCycle' => 'quota_cycle',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('leaveCode', $this->leaveCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->leaveCode) {
            $res['leave_code'] = $this->leaveCode;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->quotaNumPerDay) {
            $res['quota_num_per_day'] = $this->quotaNumPerDay;
        }
        if (null !== $this->quotaNumPerHour) {
            $res['quota_num_per_hour'] = $this->quotaNumPerHour;
        }
        if (null !== $this->quotaCycle) {
            $res['quota_cycle'] = $this->quotaCycle;
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
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['leave_code'])){
            $model->leaveCode = $map['leave_code'];
        }
        if(isset($map['reason'])){
            $model->reason = $map['reason'];
        }
        if(isset($map['quota_num_per_day'])){
            $model->quotaNumPerDay = $map['quota_num_per_day'];
        }
        if(isset($map['quota_num_per_hour'])){
            $model->quotaNumPerHour = $map['quota_num_per_hour'];
        }
        if(isset($map['quota_cycle'])){
            $model->quotaCycle = $map['quota_cycle'];
        }
        return $model;
    }
    /**
     * @description 员工ID
     * @var string
     */
    public $userid;

    /**
     * @description 额度有效期结束时间(毫秒级时间戳)
     * @var int
     */
    public $endTime;

    /**
     * @description 额度有效期开始时间(毫秒级时间戳)
     * @var int
     */
    public $startTime;

    /**
     * @description 假期类型唯一标识
     * @var string
     */
    public $leaveCode;

    /**
     * @description 操作原因
     * @var string
     */
    public $reason;

    /**
     * @description 单位以天计算的额度总数(假期类型按天计算该值不为空且按百分之一天折算 例如 100=1天)
     * @var int
     */
    public $quotaNumPerDay;

    /**
     * @description 单位以小时计算的额度总数(假期类型按小时计算该值不为空且按百分之一小时折算 例如 100=1小时)
     * @var int
     */
    public $quotaNumPerHour;

    /**
     * @description 额度所对应的周期(除了假期类型为调休的时候可以为空之外 其他情况均不能为空 且格式必须满足"yyyy")
     * @var string
     */
    public $quotaCycle;

}
