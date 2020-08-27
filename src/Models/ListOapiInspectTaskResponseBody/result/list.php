<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiInspectTaskResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'duration' => 'duration',
        'status' => 'status',
        'checkOutTime' => 'check_out_time',
        'checkInTime' => 'check_in_time',
        'userid' => 'userid',
        'workDate' => 'work_date',
        'taskId' => 'task_id',
        'positionId' => 'position_id',
        'positionName' => 'position_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->checkOutTime) {
            $res['check_out_time'] = $this->checkOutTime;
        }
        if (null !== $this->checkInTime) {
            $res['check_in_time'] = $this->checkInTime;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->workDate) {
            $res['work_date'] = $this->workDate;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->positionId) {
            $res['position_id'] = $this->positionId;
        }
        if (null !== $this->positionName) {
            $res['position_name'] = $this->positionName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['check_out_time'])){
            $model->checkOutTime = $map['check_out_time'];
        }
        if(isset($map['check_in_time'])){
            $model->checkInTime = $map['check_in_time'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['work_date'])){
            $model->workDate = $map['work_date'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        if(isset($map['position_id'])){
            $model->positionId = $map['position_id'];
        }
        if(isset($map['position_name'])){
            $model->positionName = $map['position_name'];
        }
        return $model;
    }
    /**
     * @description 巡店时间，单位秒
     * @var string
     */
    public $duration;

    /**
     * @description 任务状态，1已签到，2已正常签退，3已异常签退
     * @var string
     */
    public $status;

    /**
     * @description 签退时间戳，单位毫秒
     * @var int
     */
    public $checkOutTime;

    /**
     * @description 签到时间戳，单位毫秒
     * @var int
     */
    public $checkInTime;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 工作日期时间戳，单位毫秒
     * @var int
     */
    public $workDate;

    /**
     * @description 任务id 唯一标识一个任务
     * @var string
     */
    public $taskId;

    /**
     * @description 位置唯一标识，如果是B1等硬件设备则为设备唯一标识
     * @var string
     */
    public $positionId;

    /**
     * @description 位置名称
     * @var string
     */
    public $positionName;

}
