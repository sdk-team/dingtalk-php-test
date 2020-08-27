<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetwithformSmartworkBpmsProcessinstanceResponseBody\result\result;

use AlibabaCloud\Tea\Model;

class tasks extends Model {
    protected $_name = [
        'userid' => 'userid',
        'taskStatus' => 'task_status',
        'taskResult' => 'task_result',
        'createTime' => 'create_time',
        'finishTime' => 'finish_time',
        'taskId' => 'task_id',
    ];
    public function validate() {
        Model::validatePattern('createTime', $this->createTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('finishTime', $this->finishTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->taskStatus) {
            $res['task_status'] = $this->taskStatus;
        }
        if (null !== $this->taskResult) {
            $res['task_result'] = $this->taskResult;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->finishTime) {
            $res['finish_time'] = $this->finishTime;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return tasks
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['task_status'])){
            $model->taskStatus = $map['task_status'];
        }
        if(isset($map['task_result'])){
            $model->taskResult = $map['task_result'];
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['finish_time'])){
            $model->finishTime = $map['finish_time'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        return $model;
    }
    /**
     * @description 任务处理人
     * @var string
     */
    public $userid;

    /**
     * @description 任务状态，分为NEW（未启动），RUNNING（处理中），PAUSED（暂停），CANCELED（取消），COMPLETED（完成），TERMINATED（终止）
     * @var string
     */
    public $taskStatus;

    /**
     * @description 结果，分为AGREE（同意），REFUSE（拒绝），REDIRECTED（转交）
     * @var string
     */
    public $taskResult;

    /**
     * @description 开始时间
     * @var string
     */
    public $createTime;

    /**
     * @description 结束时间
     * @var string
     */
    public $finishTime;

    /**
     * @description 任务节点id
     * @var string
     */
    public $taskId;

}
