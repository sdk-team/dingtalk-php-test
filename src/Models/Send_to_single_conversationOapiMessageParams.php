<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_single_conversationOapiMessageParams\msg;

class Send_to_single_conversationOapiMessageParams extends Model {
    protected $_name = [
        'senderUserid' => 'sender_userid',
        'receiverUserid' => 'receiver_userid',
        'msg' => 'msg',
    ];
    public function validate() {
        Model::validateRequired('senderUserid', $this->senderUserid, true);
        Model::validateRequired('receiverUserid', $this->receiverUserid, true);
        Model::validateRequired('msg', $this->msg, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->senderUserid) {
            $res['sender_userid'] = $this->senderUserid;
        }
        if (null !== $this->receiverUserid) {
            $res['receiver_userid'] = $this->receiverUserid;
        }
        if (null !== $this->msg) {
            $res['msg'] = null !== $this->msg ? $this->msg->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Send_to_single_conversationOapiMessageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sender_userid'])){
            $model->senderUserid = $map['sender_userid'];
        }
        if(isset($map['receiver_userid'])){
            $model->receiverUserid = $map['receiver_userid'];
        }
        if(isset($map['msg'])){
            $model->msg = msg::fromMap($map['msg']);
        }
        return $model;
    }
    /**
     * @description 发送者userId
     * @var string
     */
    public $senderUserid;

    /**
     * @description 接收者userId
     * @var string
     */
    public $receiverUserid;

    /**
     * @description 推送消息内容
     * @var msg
     */
    public $msg;

}
