<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams;

use AlibabaCloud\Tea\Model;

class link extends Model {
    protected $_name = [
        'messageUrl' => 'messageUrl',
        'title' => 'title',
        'picUrl' => 'picUrl',
        'text' => 'text',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->messageUrl) {
            $res['messageUrl'] = $this->messageUrl;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->picUrl) {
            $res['picUrl'] = $this->picUrl;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return link
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['messageUrl'])){
            $model->messageUrl = $map['messageUrl'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['picUrl'])){
            $model->picUrl = $map['picUrl'];
        }
        if(isset($map['text'])){
            $model->text = $map['text'];
        }
        return $model;
    }
    /**
     * @description 点击消息跳转的URL
     * @var string
     */
    public $messageUrl;

    /**
     * @description 消息标题
     * @var string
     */
    public $title;

    /**
     * @description 图片URL
     * @var string
     */
    public $picUrl;

    /**
     * @description 消息内容。如果太长只会部分展示
     * @var string
     */
    public $text;

}
