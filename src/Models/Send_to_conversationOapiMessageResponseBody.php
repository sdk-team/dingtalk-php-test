<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Send_to_conversationOapiMessageResponseBody extends Model {
    protected $_name = [
        'receiver' => 'receiver',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->receiver) {
            $res['receiver'] = $this->receiver;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Send_to_conversationOapiMessageResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['receiver'])){
            $model->receiver = $map['receiver'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 如果是群，返回跟发送者同一家企业的一组工号；如果是个人聊天，只返回发送者同一家企业的一个工号；不在同一家企业，发送失败
     * @var string
     */
    public $receiver;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

}
