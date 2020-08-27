<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RecallOapiMessageCorpconversationParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'msgTaskId' => 'msg_task_id',
    ];
    public function validate() {
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('msgTaskId', $this->msgTaskId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->msgTaskId) {
            $res['msg_task_id'] = $this->msgTaskId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RecallOapiMessageCorpconversationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['msg_task_id'])){
            $model->msgTaskId = $map['msg_task_id'];
        }
        return $model;
    }
    /**
     * @description 发送工作通知的微应用agentId
     * @var int
     */
    public $agentId;

    /**
     * @description 发送工作通知返回的taskId
     * @var int
     */
    public $msgTaskId;

}
