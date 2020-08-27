<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiImChatbotParams extends Model {
    protected $_name = [
        'openConversationId' => 'open_conversation_id',
    ];
    public function validate() {
        Model::validateRequired('openConversationId', $this->openConversationId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiImChatbotParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        return $model;
    }
    /**
     * @description 开放的会话conversationId
     * @var string
     */
    public $openConversationId;

}
