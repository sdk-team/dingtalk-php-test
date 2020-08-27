<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiCustomerserviceMessageParams\message;

class SendOapiCustomerserviceMessageParams extends Model {
    protected $_name = [
        'message' => 'message',
    ];
    public function validate() {
        Model::validateRequired('message', $this->message, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = null !== $this->message ? $this->message->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiCustomerserviceMessageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['message'])){
            $model->message = message::fromMap($map['message']);
        }
        return $model;
    }
    /**
     * @description 消息对象
     * @var message
     */
    public $message;

}
