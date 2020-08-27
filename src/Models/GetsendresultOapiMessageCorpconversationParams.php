<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetsendresultOapiMessageCorpconversationParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'taskId' => 'task_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetsendresultOapiMessageCorpconversationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        return $model;
    }
    /**
     * @description 微应用的agentid
     * @var int
     */
    public $agentId;

    /**
     * @description 异步任务的id
     * @var int
     */
    public $taskId;

}
