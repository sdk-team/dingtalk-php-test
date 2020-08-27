<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiChatResponseBody extends Model {
    protected $_name = [
        'conversationTag' => 'conversationTag',
        'openConversationId' => 'openConversationId',
        'chatid' => 'chatid',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->conversationTag) {
            $res['conversationTag'] = $this->conversationTag;
        }
        if (null !== $this->openConversationId) {
            $res['openConversationId'] = $this->openConversationId;
        }
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
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
     * @return CreateOapiChatResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['conversationTag'])){
            $model->conversationTag = $map['conversationTag'];
        }
        if(isset($map['openConversationId'])){
            $model->openConversationId = $map['openConversationId'];
        }
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
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
     * @description conversationTag
     * @var int
     */
    public $conversationTag;

    /**
     * @description openConversationId
     * @var string
     */
    public $openConversationId;

    /**
     * @description chatid
     * @var string
     */
    public $chatid;

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
