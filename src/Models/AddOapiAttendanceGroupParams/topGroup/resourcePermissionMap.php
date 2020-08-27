<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupParams\topGroup;

use AlibabaCloud\Tea\Model;

class resourcePermissionMap extends Model {
    protected $_name = [
        'schedule' => 'schedule',
        'groupMember' => 'group_member',
        'groupType' => 'group_type',
        'checkTime' => 'check_time',
        'checkPositionType' => 'check_position_type',
        'overTimeRule' => 'over_time_rule',
        'cameraCheck' => 'camera_check',
        'outSideCheck' => 'out_side_check',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->schedule) {
            $res['schedule'] = $this->schedule;
        }
        if (null !== $this->groupMember) {
            $res['group_member'] = $this->groupMember;
        }
        if (null !== $this->groupType) {
            $res['group_type'] = $this->groupType;
        }
        if (null !== $this->checkTime) {
            $res['check_time'] = $this->checkTime;
        }
        if (null !== $this->checkPositionType) {
            $res['check_position_type'] = $this->checkPositionType;
        }
        if (null !== $this->overTimeRule) {
            $res['over_time_rule'] = $this->overTimeRule;
        }
        if (null !== $this->cameraCheck) {
            $res['camera_check'] = $this->cameraCheck;
        }
        if (null !== $this->outSideCheck) {
            $res['out_side_check'] = $this->outSideCheck;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return resourcePermissionMap
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['schedule'])){
            $model->schedule = $map['schedule'];
        }
        if(isset($map['group_member'])){
            $model->groupMember = $map['group_member'];
        }
        if(isset($map['group_type'])){
            $model->groupType = $map['group_type'];
        }
        if(isset($map['check_time'])){
            $model->checkTime = $map['check_time'];
        }
        if(isset($map['check_position_type'])){
            $model->checkPositionType = $map['check_position_type'];
        }
        if(isset($map['over_time_rule'])){
            $model->overTimeRule = $map['over_time_rule'];
        }
        if(isset($map['camera_check'])){
            $model->cameraCheck = $map['camera_check'];
        }
        if(isset($map['out_side_check'])){
            $model->outSideCheck = $map['out_side_check'];
        }
        return $model;
    }
    /**
     * @description 员工排班
     * @var string
     */
    public $schedule;

    /**
     * @description 设置参与考勤人员
     * @var string
     */
    public $groupMember;

    /**
     * @description 设置考勤类型
     * @var string
     */
    public $groupType;

    /**
     * @description 设置考勤时间
     * @var string
     */
    public $checkTime;

    /**
     * @description 设置打卡方式
     * @var string
     */
    public $checkPositionType;

    /**
     * @description 设置加班规则
     * @var string
     */
    public $overTimeRule;

    /**
     * @description 设置拍照打卡规则
     * @var string
     */
    public $cameraCheck;

    /**
     * @description 设置外勤打卡
     * @var string
     */
    public $outSideCheck;

}
