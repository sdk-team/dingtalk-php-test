<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody;

use AlibabaCloud\Tea\Model;

class link extends Model {
    protected $_name = [
        'picUrl' => 'pic_url',
        'messageUrl' => 'message_url',
        'text' => 'text',
        'title' => 'title',
    ];
    public function validate() {
        Model::validateMaxLength('picUrl', $this->picUrl, 700);
        Model::validateMaxLength('messageUrl', $this->messageUrl, 700);
        Model::validateMaxLength('text', $this->text, 500);
        Model::validateMaxLength('title', $this->title, 100);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->picUrl) {
            $res['pic_url'] = $this->picUrl;
        }
        if (null !== $this->messageUrl) {
            $res['message_url'] = $this->messageUrl;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return link
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['pic_url'])){
            $model->picUrl = $map['pic_url'];
        }
        if(isset($map['message_url'])){
            $model->messageUrl = $map['message_url'];
        }
        if(isset($map['text'])){
            $model->text = $map['text'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        return $model;
    }
    /**
     * @description 图片地址
     * @var string
     */
    public $picUrl;

    /**
     * @description 消息点击链接地址，当发送消息为小程序时支持小程序跳转链接
     * @var string
     */
    public $messageUrl;

    /**
     * @description 消息描述，建议500字符以内
     * @var string
     */
    public $text;

    /**
     * @description 消息标题，建议100字符以内
     * @var string
     */
    public $title;

}
