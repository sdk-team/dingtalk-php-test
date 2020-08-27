<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiServicegroupMessageParams\conversationMessage;

class SendOapiServicegroupMessageParams extends Model {
    protected $_name = [
        'orderId' => 'order_id',
        'conversationMessage' => 'conversation_message',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('conversationMessage', $this->conversationMessage, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->conversationMessage) {
            $res['conversation_message'] = null !== $this->conversationMessage ? $this->conversationMessage->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiServicegroupMessageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['conversation_message'])){
            $model->conversationMessage = conversationMessage::fromMap($map['conversation_message']);
        }
        return $model;
    }
    /**
     * @description 订单id
     * @var int
     */
    public $orderId;

    /**
     * @description 消息对象
     * @var conversationMessage
     */
    public $conversationMessage;

}
