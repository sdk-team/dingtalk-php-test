<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiImChatControlgroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'openConversationId' => 'open_conversation_id',
        'chatId' => 'chat_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->chatId) {
            $res['chat_id'] = $this->chatId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['chat_id'])){
            $model->chatId = $map['chat_id'];
        }
        return $model;
    }
    /**
     * @description 开放的会话ID
     * @var string
     */
    public $openConversationId;

    /**
     * @description 开放的会话chatId
     * @var string
     */
    public $chatId;

}
