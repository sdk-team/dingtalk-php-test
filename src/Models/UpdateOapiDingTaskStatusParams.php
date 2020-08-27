<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiDingTaskStatusParams extends Model {
    protected $_name = [
        'taskId' => 'task_id',
        'taskStatus' => 'task_status',
        'operatorUserid' => 'operator_userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['task_status'] = $this->taskStatus;
        }
        if (null !== $this->operatorUserid) {
            $res['operator_userid'] = $this->operatorUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiDingTaskStatusParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        if(isset($map['task_status'])){
            $model->taskStatus = $map['task_status'];
        }
        if(isset($map['operator_userid'])){
            $model->operatorUserid = $map['operator_userid'];
        }
        return $model;
    }
    /**
     * @description 任务ID
     * @var string
     */
    public $taskId;

    /**
     * @description 任务状态:1-未完成;2-完成
     * @var int
     */
    public $taskStatus;

    /**
     * @description 操作人id
     * @var string
     */
    public $operatorUserid;

}
