<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatbotMessageResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'messageId' => 'message_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->messageId) {
            $res['message_id'] = $this->messageId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['message_id'])){
            $model->messageId = $map['message_id'];
        }
        return $model;
    }
    /**
     * @description 加密的消息id
     * @var string
     */
    public $messageId;

}
