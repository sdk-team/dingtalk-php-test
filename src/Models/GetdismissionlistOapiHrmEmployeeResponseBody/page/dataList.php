<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetdismissionlistOapiHrmEmployeeResponseBody\page;

use AlibabaCloud\Tea\Model;

class dataList extends Model {
    protected $_name = [
        'userid' => 'userid',
        'name' => 'name',
        'employeeType' => 'employee_type',
        'deptName' => 'dept_name',
        'position' => 'position',
        'employeeStatus' => 'employee_status',
        'dismissionReason' => 'dismission_reason',
        'confirmJoinTime' => 'confirm_join_time',
        'lastWorkDate' => 'last_work_date',
        'dismissionMemo' => 'dismission_memo',
        'email' => 'email',
    ];
    public function validate() {
        Model::validatePattern('confirmJoinTime', $this->confirmJoinTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('lastWorkDate', $this->lastWorkDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->employeeType) {
            $res['employee_type'] = $this->employeeType;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }
        if (null !== $this->employeeStatus) {
            $res['employee_status'] = $this->employeeStatus;
        }
        if (null !== $this->dismissionReason) {
            $res['dismission_reason'] = $this->dismissionReason;
        }
        if (null !== $this->confirmJoinTime) {
            $res['confirm_join_time'] = $this->confirmJoinTime;
        }
        if (null !== $this->lastWorkDate) {
            $res['last_work_date'] = $this->lastWorkDate;
        }
        if (null !== $this->dismissionMemo) {
            $res['dismission_memo'] = $this->dismissionMemo;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dataList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['employee_type'])){
            $model->employeeType = $map['employee_type'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['position'])){
            $model->position = $map['position'];
        }
        if(isset($map['employee_status'])){
            $model->employeeStatus = $map['employee_status'];
        }
        if(isset($map['dismission_reason'])){
            $model->dismissionReason = $map['dismission_reason'];
        }
        if(isset($map['confirm_join_time'])){
            $model->confirmJoinTime = $map['confirm_join_time'];
        }
        if(isset($map['last_work_date'])){
            $model->lastWorkDate = $map['last_work_date'];
        }
        if(isset($map['dismission_memo'])){
            $model->dismissionMemo = $map['dismission_memo'];
        }
        if(isset($map['email'])){
            $model->email = $map['email'];
        }
        return $model;
    }
    /**
     * @description userId
     * @var string
     */
    public $userid;

    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description 员工类型（0:无类型，1:全职，2:兼职，3:实习，4:劳务派遣，5:退休返聘，6:劳务外包）
     * @var string
     */
    public $employeeType;

    /**
     * @description 部门名称
     * @var string
     */
    public $deptName;

    /**
     * @description 职位
     * @var string
     */
    public $position;

    /**
     * @description 员工状态（-1:无状态，1:待入职，2:试用，3:正式，4:离职，5:待离职）
     * @var string
     */
    public $employeeStatus;

    /**
     * @description 离职原因（1：家庭原因，2:个人原因，3：发展原因，4：合同到期不续签，5：协议解除，6：无法胜任工作，7：经济性裁员，8：严重违法违纪，9：其他）
     * @var string
     */
    public $dismissionReason;

    /**
     * @description 入职时间
     * @var string
     */
    public $confirmJoinTime;

    /**
     * @description 离职时间
     * @var string
     */
    public $lastWorkDate;

    /**
     * @description 离职描述
     * @var string
     */
    public $dismissionMemo;

    /**
     * @description email
     * @var string
     */
    public $email;

}
