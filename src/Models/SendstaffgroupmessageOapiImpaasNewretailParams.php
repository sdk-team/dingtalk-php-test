<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendstaffgroupmessageOapiImpaasNewretailParams extends Model {
    protected $_name = [
        'msgType' => 'msg_type',
        'sender' => 'sender',
        'chatId' => 'chat_id',
        'content' => 'content',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->msgType) {
            $res['msg_type'] = $this->msgType;
        }
        if (null !== $this->sender) {
            $res['sender'] = $this->sender;
        }
        if (null !== $this->chatId) {
            $res['chat_id'] = $this->chatId;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendstaffgroupmessageOapiImpaasNewretailParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['msg_type'])){
            $model->msgType = $map['msg_type'];
        }
        if(isset($map['sender'])){
            $model->sender = $map['sender'];
        }
        if(isset($map['chat_id'])){
            $model->chatId = $map['chat_id'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        return $model;
    }
    /**
     * @description 消息类型
     * @var int
     */
    public $msgType;

    /**
     * @description 系统账号名
     * @var string
     */
    public $sender;

    /**
     * @description 加密后的群号
     * @var string
     */
    public $chatId;

    /**
     * @description 消息内容
     * @var string
     */
    public $content;

}
