<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceVacationTypeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'leaveCode' => 'leave_code',
        'leaveName' => 'leave_name',
        'leaveViewUnit' => 'leave_view_unit',
        'bizType' => 'biz_type',
        'naturalDayLeave' => 'natural_day_leave',
        'validityType' => 'validity_type',
        'validityValue' => 'validity_value',
        'hoursInPerDay' => 'hours_in_per_day',
        'source' => 'source',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->leaveCode) {
            $res['leave_code'] = $this->leaveCode;
        }
        if (null !== $this->leaveName) {
            $res['leave_name'] = $this->leaveName;
        }
        if (null !== $this->leaveViewUnit) {
            $res['leave_view_unit'] = $this->leaveViewUnit;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->naturalDayLeave) {
            $res['natural_day_leave'] = $this->naturalDayLeave;
        }
        if (null !== $this->validityType) {
            $res['validity_type'] = $this->validityType;
        }
        if (null !== $this->validityValue) {
            $res['validity_value'] = $this->validityValue;
        }
        if (null !== $this->hoursInPerDay) {
            $res['hours_in_per_day'] = $this->hoursInPerDay;
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
        if(isset($map['leave_code'])){
            $model->leaveCode = $map['leave_code'];
        }
        if(isset($map['leave_name'])){
            $model->leaveName = $map['leave_name'];
        }
        if(isset($map['leave_view_unit'])){
            $model->leaveViewUnit = $map['leave_view_unit'];
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        if(isset($map['natural_day_leave'])){
            $model->naturalDayLeave = $map['natural_day_leave'];
        }
        if(isset($map['validity_type'])){
            $model->validityType = $map['validity_type'];
        }
        if(isset($map['validity_value'])){
            $model->validityValue = $map['validity_value'];
        }
        if(isset($map['hours_in_per_day'])){
            $model->hoursInPerDay = $map['hours_in_per_day'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        return $model;
    }
    /**
     * @description 假期类型唯一标识
     * @var string
     */
    public $leaveCode;

    /**
     * @description 假期名称
     * @var string
     */
    public $leaveName;

    /**
     * @description 请假单位，可以按照天半天或者小时请假。(day、halfday、hour其中一种)
     * @var string
     */
    public $leaveViewUnit;

    /**
     * @description 假期类型，普通假期或者加班转调休假期。(general_leave、lieu_leave其中一种)
     * @var string
     */
    public $bizType;

    /**
     * @description 是否按照自然日统计请假时长，当为false的时候，用户发起请假时候会根据用户在请假时间段内的排班情况来计算请假时长。
     * @var string
     */
    public $naturalDayLeave;

    /**
     * @description 有效类型 absolute_time(绝对时间)、relative_time(相对时间)其中一种
     * @var string
     */
    public $validityType;

    /**
     * @description 延长日期(当validity_type为absolute_time该值该值不为空且满足yy-mm格式 validity_type为relative_time该值为大于1的整数)
     * @var string
     */
    public $validityValue;

    /**
     * @description 每天折算的工作时长(百分之一 例如1天=10小时=1000)
     * @var int
     */
    public $hoursInPerDay;

    /**
     * @description 开放接口自定义的:external oa后台新建的：inner
     * @var string
     */
    public $source;

}
