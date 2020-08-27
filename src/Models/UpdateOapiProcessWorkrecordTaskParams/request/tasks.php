<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiProcessWorkrecordTaskParams\request;

use AlibabaCloud\Tea\Model;

class tasks extends Model {
    protected $_name = [
        'taskId' => 'task_id',
        'status' => 'status',
        'result' => 'result',
    ];
    public function validate() {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return tasks
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['result'])){
            $model->result = $map['result'];
        }
        return $model;
    }
    /**
     * @description 任务id
     * @var int
     */
    public $taskId;

    /**
     * @description 任务状态，分为CANCELED和COMPLETED
     * @var string
     */
    public $status;

    /**
     * @description 任务结果，分为agree和refuse。当status为CANCELED时，不需要传result
     * @var string
     */
    public $result;

}
