<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModjobinfoCorpHrmEmployeeParams;

use AlibabaCloud\Tea\Model;

class hrmApiJobModel extends Model {
    protected $_name = [
        'userid' => 'userid',
        'employeeType' => 'employee_type',
        'employeeStatus' => 'employee_status',
        'confirmJoinTime' => 'confirm_join_time',
        'probationPeriodType' => 'probation_period_type',
        'regularTime' => 'regular_time',
        'joinWorkingTime' => 'join_working_time',
        'birthTime' => 'birth_time',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validatePattern('confirmJoinTime', $this->confirmJoinTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('regularTime', $this->regularTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('joinWorkingTime', $this->joinWorkingTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('birthTime', $this->birthTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->employeeType) {
            $res['employee_type'] = $this->employeeType;
        }
        if (null !== $this->employeeStatus) {
            $res['employee_status'] = $this->employeeStatus;
        }
        if (null !== $this->confirmJoinTime) {
            $res['confirm_join_time'] = $this->confirmJoinTime;
        }
        if (null !== $this->probationPeriodType) {
            $res['probation_period_type'] = $this->probationPeriodType;
        }
        if (null !== $this->regularTime) {
            $res['regular_time'] = $this->regularTime;
        }
        if (null !== $this->joinWorkingTime) {
            $res['join_working_time'] = $this->joinWorkingTime;
        }
        if (null !== $this->birthTime) {
            $res['birth_time'] = $this->birthTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return hrmApiJobModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['employee_type'])){
            $model->employeeType = $map['employee_type'];
        }
        if(isset($map['employee_status'])){
            $model->employeeStatus = $map['employee_status'];
        }
        if(isset($map['confirm_join_time'])){
            $model->confirmJoinTime = $map['confirm_join_time'];
        }
        if(isset($map['probation_period_type'])){
            $model->probationPeriodType = $map['probation_period_type'];
        }
        if(isset($map['regular_time'])){
            $model->regularTime = $map['regular_time'];
        }
        if(isset($map['join_working_time'])){
            $model->joinWorkingTime = $map['join_working_time'];
        }
        if(isset($map['birth_time'])){
            $model->birthTime = $map['birth_time'];
        }
        return $model;
    }
    /**
     * @description 被操作人userid
     * @var string
     */
    public $userid;

    /**
     * @description 员工类型（1:全职，2:兼职，3:实习，4:劳务派遣，5:退休返聘，6:劳务外包）
     * @var int
     */
    public $employeeType;

    /**
     * @description 员工状态（2:试用，3:正式）
     * @var int
     */
    public $employeeStatus;

    /**
     * @description 入职日期
     * @var string
     */
    public $confirmJoinTime;

    /**
     * @description 试用期（1:无试用期，2:1个月，3:2个月，4:3个月，5:4个月，6:5个月，7:6个月，8:其他）
     * @var int
     */
    public $probationPeriodType;

    /**
     * @description 转正时间
     * @var string
     */
    public $regularTime;

    /**
     * @description 首次参加工作时间
     * @var string
     */
    public $joinWorkingTime;

    /**
     * @description 生日日期
     * @var string
     */
    public $birthTime;

}
