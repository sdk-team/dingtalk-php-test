<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiImChatbotResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'chatbotUserId' => 'chatbot_user_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->chatbotUserId) {
            $res['chatbot_user_id'] = $this->chatbotUserId;
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
        return $model;
    }
    /**
     * @description 机器人userId
     * @var string
     */
    public $chatbotUserId;

}
