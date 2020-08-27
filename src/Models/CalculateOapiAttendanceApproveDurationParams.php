<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CalculateOapiAttendanceApproveDurationParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'bizType' => 'biz_type',
        'fromTime' => 'from_time',
        'toTime' => 'to_time',
        'durationUnit' => 'duration_unit',
        'calculateModel' => 'calculate_model',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('fromTime', $this->fromTime, true);
        Model::validateRequired('toTime', $this->toTime, true);
        Model::validateRequired('durationUnit', $this->durationUnit, true);
        Model::validateRequired('calculateModel', $this->calculateModel, true);
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
        return $res;
    }
    /**
     * @param array $map
     * @return CalculateOapiAttendanceApproveDurationParams
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
        return $model;
    }
    /**
     * @description 员工的user_id
     * @var string
     */
    public $userid;

    /**
     * @description 审批单类型1：加班，2：出差，3：请假
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

}
