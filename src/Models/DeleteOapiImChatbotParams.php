<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiImChatbotParams extends Model {
    protected $_name = [
        'openConversationId' => 'open_conversation_id',
        'chatbotUserId' => 'chatbot_user_id',
    ];
    public function validate() {
        Model::validateRequired('openConversationId', $this->openConversationId, true);
        Model::validateRequired('chatbotUserId', $this->chatbotUserId, true);
        Model::validateMaxLength('openConversationId', $this->openConversationId, 128);
        Model::validateMaxLength('chatbotUserId', $this->chatbotUserId, 128);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->chatbotUserId) {
            $res['chatbot_user_id'] = $this->chatbotUserId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiImChatbotParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['chatbot_user_id'])){
            $model->chatbotUserId = $map['chatbot_user_id'];
        }
        return $model;
    }
    /**
     * @description 开放的会话conversationId
     * @var string
     */
    public $openConversationId;

    /**
     * @description 开放的机器人userId
     * @var string
     */
    public $chatbotUserId;

}
