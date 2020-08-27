<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiTdpTaskBasicParams extends Model {
    protected $_name = [
        'microappAgentId' => 'microapp_agent_id',
        'taskId' => 'task_id',
    ];
    public function validate() {
        Model::validateRequired('taskId', $this->taskId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->microappAgentId) {
            $res['microapp_agent_id'] = $this->microappAgentId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiTdpTaskBasicParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['microapp_agent_id'])){
            $model->microappAgentId = $map['microapp_agent_id'];
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
     * @description 任务ID
     * @var string
     */
    public $taskId;

}
