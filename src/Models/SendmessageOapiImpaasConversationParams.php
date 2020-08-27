<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendmessageOapiImpaasConversationParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'type' => 'type',
        'content' => 'content',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('content', $this->content, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendmessageOapiImpaasConversationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        return $model;
    }
    /**
     * @description 群id
     * @var string
     */
    public $chatid;

    /**
     * @description 1. 优惠券 2 系统消息
     * @var int
     */
    public $type;

    /**
     * @description 消息内容
     * @var string
     */
    public $content;

}
