<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\oa\body;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\oa\head;

class oa extends Model {
    protected $_name = [
        'messageUrl' => 'message_url',
        'pcMessageUrl' => 'pc_message_url',
        'body' => 'body',
        'head' => 'head',
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
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->head) {
            $res['head'] = null !== $this->head ? $this->head->toMap() : null;
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
        if(isset($map['body'])){
            $model->body = body::fromMap($map['body']);
        }
        if(isset($map['head'])){
            $model->head = head::fromMap($map['head']);
        }
        return $model;
    }
    /**
     * @description 客户端点击消息时跳转到的H5地址
     * @var string
     */
    public $messageUrl;

    /**
     * @description PC端点击消息时跳转到的地址
     * @var string
     */
    public $pcMessageUrl;

    /**
     * @description 消息体
     * @var body
     */
    public $body;

    /**
     * @description 消息头部内容
     * @var head
     */
    public $head;

}
