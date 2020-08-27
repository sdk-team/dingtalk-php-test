<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Send_to_single_conversationOapiMessageResponseBody extends Model {
    protected $_name = [
        'msgId' => 'msg_id',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->msgId) {
            $res['msg_id'] = $this->msgId;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Send_to_single_conversationOapiMessageResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['msg_id'])){
            $model->msgId = $map['msg_id'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description 推送消息标识
     * @var string
     */
    public $msgId;

    /**
     * @description 错误码 0 表示成功
     * @var int
     */
    public $errcode;

    /**
     * @description 错误描述
     * @var string
     */
    public $errmsg;

}
