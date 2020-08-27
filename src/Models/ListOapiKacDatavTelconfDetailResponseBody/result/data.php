<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavTelconfDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'confId' => 'conf_id',
        'confLenMin' => 'conf_len_min',
        'deptId' => 'dept_id',
        'deptName' => 'dept_name',
        'endTime' => 'end_time',
        'joinUserCount' => 'join_user_count',
        'userid' => 'userid',
        'staffJobNum' => 'staff_job_num',
        'staffName' => 'staff_name',
        'startTime' => 'start_time',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->confId) {
            $res['conf_id'] = $this->confId;
        }
        if (null !== $this->confLenMin) {
            $res['conf_len_min'] = $this->confLenMin;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->joinUserCount) {
            $res['join_user_count'] = $this->joinUserCount;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->staffJobNum) {
            $res['staff_job_num'] = $this->staffJobNum;
        }
        if (null !== $this->staffName) {
            $res['staff_name'] = $this->staffName;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['conf_id'])){
            $model->confId = $map['conf_id'];
        }
        if(isset($map['conf_len_min'])){
            $model->confLenMin = $map['conf_len_min'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['join_user_count'])){
            $model->joinUserCount = $map['join_user_count'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['staff_job_num'])){
            $model->staffJobNum = $map['staff_job_num'];
        }
        if(isset($map['staff_name'])){
            $model->staffName = $map['staff_name'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        return $model;
    }
    /**
     * @description 会议id
     * @var string
     */
    public $confId;

    /**
     * @description 会议时长（分钟）
     * @var string
     */
    public $confLenMin;

    /**
     * @description 发起人部门id
     * @var int
     */
    public $deptId;

    /**
     * @description 发起人部门
     * @var string
     */
    public $deptName;

    /**
     * @description 会议结束时间
     * @var string
     */
    public $endTime;

    /**
     * @description 参与人数
     * @var int
     */
    public $joinUserCount;

    /**
     * @description 员工在当前企业内的唯一标识，也称staffId。可由企业在创建时指定，并代表一定含义比如工号，创建后不可修改
     * @var string
     */
    public $userid;

    /**
     * @description 发起人工号
     * @var string
     */
    public $staffJobNum;

    /**
     * @description 发起人姓名
     * @var string
     */
    public $staffName;

    /**
     * @description 会议开始时间
     * @var string
     */
    public $startTime;

}
