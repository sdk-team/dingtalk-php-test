<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendmockCorpMessageCorpconversationParams extends Model {
    protected $_name = [
        'microappAgentId' => 'microapp_agent_id',
        'toUser' => 'to_user',
        'toParty' => 'to_party',
        'messageType' => 'message_type',
        'message' => 'message',
    ];
    public function validate() {
        Model::validateRequired('microappAgentId', $this->microappAgentId, true);
        Model::validateRequired('toUser', $this->toUser, true);
        Model::validateRequired('toParty', $this->toParty, true);
        Model::validateRequired('messageType', $this->messageType, true);
        Model::validateRequired('message', $this->message, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->microappAgentId) {
            $res['microapp_agent_id'] = $this->microappAgentId;
        }
        if (null !== $this->toUser) {
            $res['to_user'] = $this->toUser;
        }
        if (null !== $this->toParty) {
            $res['to_party'] = $this->toParty;
        }
        if (null !== $this->messageType) {
            $res['message_type'] = $this->messageType;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendmockCorpMessageCorpconversationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['microapp_agent_id'])){
            $model->microappAgentId = $map['microapp_agent_id'];
        }
        if(isset($map['to_user'])){
            if(!empty($map['to_user'])){
                $model->toUser = $map['to_user'];
            }
        }
        if(isset($map['to_party'])){
            if(!empty($map['to_party'])){
                $model->toParty = $map['to_party'];
            }
        }
        if(isset($map['message_type'])){
            $model->messageType = $map['message_type'];
        }
        if(isset($map['message'])){
            $model->message = $map['message'];
        }
        return $model;
    }
    /**
     * @description 微应用agentId
     * @var int
     */
    public $microappAgentId;

    /**
     * @description 消息接收者userid列表
     * @var array
     */
    public $toUser;

    /**
     * @description 消息接收者部门列表
     * @var array
     */
    public $toParty;

    /**
     * @description 消息类型
     * @var string
     */
    public $messageType;

    /**
     * @description 消息体
     * @var string
     */
    public $message;

}
