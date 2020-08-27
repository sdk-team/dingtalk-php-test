<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Asyncsend_v2OapiMessageCorpconversationParams\msg;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Asyncsend_v2OapiMessageCorpconversationParams\msg\oa\body;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Asyncsend_v2OapiMessageCorpconversationParams\msg\oa\head;

class oa extends Model {
    protected $_name = [
        'body' => 'body',
        'head' => 'head',
        'pcMessageUrl' => 'pc_message_url',
        'messageUrl' => 'message_url',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->head) {
            $res['head'] = null !== $this->head ? $this->head->toMap() : null;
        }
        if (null !== $this->pcMessageUrl) {
            $res['pc_message_url'] = $this->pcMessageUrl;
        }
        if (null !== $this->messageUrl) {
            $res['message_url'] = $this->messageUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return oa
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['body'])){
            $model->body = body::fromMap($map['body']);
        }
        if(isset($map['head'])){
            $model->head = head::fromMap($map['head']);
        }
        if(isset($map['pc_message_url'])){
            $model->pcMessageUrl = $map['pc_message_url'];
        }
        if(isset($map['message_url'])){
            $model->messageUrl = $map['message_url'];
        }
        return $model;
    }
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

    /**
     * @description PC端点击消息时跳转到的地址
     * @var string
     */
    public $pcMessageUrl;

    /**
     * @description 消息点击链接地址，当发送消息为小程序时支持小程序跳转链接
     * @var string
     */
    public $messageUrl;

}
