<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiTdpTaskBasicParams\task;

class UpdateOapiTdpTaskBasicParams extends Model {
    protected $_name = [
        'microappAgentId' => 'microapp_agent_id',
        'task' => 'task',
        'operatorUserid' => 'operator_userid',
        'taskId' => 'task_id',
    ];
    public function validate() {
        Model::validateRequired('task', $this->task, true);
        Model::validateRequired('taskId', $this->taskId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->microappAgentId) {
            $res['microapp_agent_id'] = $this->microappAgentId;
        }
        if (null !== $this->task) {
            $res['task'] = null !== $this->task ? $this->task->toMap() : null;
        }
        if (null !== $this->operatorUserid) {
            $res['operator_userid'] = $this->operatorUserid;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiTdpTaskBasicParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['microapp_agent_id'])){
            $model->microappAgentId = $map['microapp_agent_id'];
        }
        if(isset($map['task'])){
            $model->task = task::fromMap($map['task']);
        }
        if(isset($map['operator_userid'])){
            $model->operatorUserid = $map['operator_userid'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        return $model;
    }
    /**
     * @description 微应用agentId
     * @var int
     */
    public $microappAgentId;

    /**
     * @description 请求入参
     * @var task
     */
    public $task;

    /**
     * @description 操作者id
     * @var string
     */
    public $operatorUserid;

    /**
     * @description 任务ID
     * @var string
     */
    public $taskId;

}
