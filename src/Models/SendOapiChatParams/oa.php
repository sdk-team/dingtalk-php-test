<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\oa\head;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\oa\body;

class oa extends Model {
    protected $_name = [
        'messageUrl' => 'message_url',
        'pcMessageUrl' => 'pc_message_url',
        'head' => 'head',
        'body' => 'body',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->messageUrl) {
            $res['message_url'] = $this->messageUrl;
        }
        if (null !== $this->pcMessageUrl) {
            $res['pc_message_url'] = $this->pcMessageUrl;
        }
        if (null !== $this->head) {
            $res['head'] = null !== $this->head ? $this->head->toMap() : null;
        }
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return oa
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['message_url'])){
            $model->messageUrl = $map['message_url'];
        }
        if(isset($map['pc_message_url'])){
            $model->pcMessageUrl = $map['pc_message_url'];
        }
        if(isset($map['head'])){
            $model->head = head::fromMap($map['head']);
        }
        if(isset($map['body'])){
            $model->body = body::fromMap($map['body']);
        }
        return $model;
    }
    /**
     * @description 消息链接
     * @var string
     */
    public $messageUrl;

    /**
     * @description pc端消息链接
     * @var string
     */
    public $pcMessageUrl;

    /**
     * @description 消息头部
     * @var head
     */
    public $head;

    /**
     * @description 消息体
     * @var body
     */
    public $body;

}
