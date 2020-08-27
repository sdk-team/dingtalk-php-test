<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddchatbotinstanceCorpChatbotResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'chatbotUserId' => 'chatbot_user_id',
        'webhook' => 'webhook',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->chatbotUserId) {
            $res['chatbot_user_id'] = $this->chatbotUserId;
        }
        if (null !== $this->webhook) {
            $res['webhook'] = $this->webhook;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatbot_user_id'])){
            $model->chatbotUserId = $map['chatbot_user_id'];
        }
        if(isset($map['webhook'])){
            $model->webhook = $map['webhook'];
        }
        return $model;
    }
    /**
     * @description 机器人实例userId
     * @var string
     */
    public $chatbotUserId;

    /**
     * @description 机器人发消息时的地址
     * @var string
     */
    public $webhook;

}
