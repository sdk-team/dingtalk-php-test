<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbydaysOapiAttendanceScheduleShiftResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'workDate' => 'work_date',
        'shiftNames' => 'shift_names',
        'userid' => 'userid',
        'shiftVersions' => 'shift_versions',
        'shiftIds' => 'shift_ids',
        'groupId' => 'group_id',
        'corpId' => 'corp_id',
    ];
    public function validate() {
        Model::validatePattern('workDate', $this->workDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->workDate) {
            $res['work_date'] = $this->workDate;
        }
        if (null !== $this->shiftNames) {
            $res['shift_names'] = $this->shiftNames;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->shiftVersions) {
            $res['shift_versions'] = $this->shiftVersions;
        }
        if (null !== $this->shiftIds) {
            $res['shift_ids'] = $this->shiftIds;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['work_date'])){
            $model->workDate = $map['work_date'];
        }
        if(isset($map['shift_names'])){
            if(!empty($map['shift_names'])){
                $model->shiftNames = $map['shift_names'];
            }
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['shift_versions'])){
            if(!empty($map['shift_versions'])){
                $model->shiftVersions = $map['shift_versions'];
            }
        }
        if(isset($map['shift_ids'])){
            if(!empty($map['shift_ids'])){
                $model->shiftIds = $map['shift_ids'];
            }
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        return $model;
    }
    /**
     * @description 工作日
     * @var string
     */
    public $workDate;

    /**
     * @description 班次名称
     * @var array
     */
    public $shiftNames;

    /**
     * @description 人员userId
     * @var string
     */
    public $userid;

    /**
     * @description 班次版本id
     * @var array
     */
    public $shiftVersions;

    /**
     * @description 班次id
     * @var array
     */
    public $shiftIds;

    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

    /**
     * @description 企业id
     * @var string
     */
    public $corpId;

}
