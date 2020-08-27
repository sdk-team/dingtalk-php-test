<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncOapiAttendanceGroupScheduleParams;

use AlibabaCloud\Tea\Model;

class schedules extends Model {
    protected $_name = [
        'shiftId' => 'shift_id',
        'workDate' => 'work_date',
        'isRest' => 'is_rest',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('shiftId', $this->shiftId, true);
        Model::validateRequired('workDate', $this->workDate, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->shiftId) {
            $res['shift_id'] = $this->shiftId;
        }
        if (null !== $this->workDate) {
            $res['work_date'] = $this->workDate;
        }
        if (null !== $this->isRest) {
            $res['is_rest'] = $this->isRest;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return schedules
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['shift_id'])){
            $model->shiftId = $map['shift_id'];
        }
        if(isset($map['work_date'])){
            $model->workDate = $map['work_date'];
        }
        if(isset($map['is_rest'])){
            $model->isRest = $map['is_rest'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 班次id（休息班传1）
     * @var int
     */
    public $shiftId;

    /**
     * @description 排班日期
     * @var int
     */
    public $workDate;

    /**
     * @description 是否休息（true表示休息，shift_id传1）
     * @var bool
     */
    public $isRest;

    /**
     * @description 人员userId
     * @var string
     */
    public $userid;

}
