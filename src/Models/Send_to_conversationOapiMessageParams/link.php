<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams;

use AlibabaCloud\Tea\Model;

class link extends Model {
    protected $_name = [
        'messageUrl' => 'messageUrl',
        'text' => 'text',
        'title' => 'title',
        'picUrl' => 'picUrl',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->messageUrl) {
            $res['messageUrl'] = $this->messageUrl;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->picUrl) {
            $res['picUrl'] = $this->picUrl;
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
        if(isset($map['text'])){
            $model->text = $map['text'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['picUrl'])){
            $model->picUrl = $map['picUrl'];
        }
        return $model;
    }
    /**
     * @description 消息点击链接地址
     * @var string
     */
    public $messageUrl;

    /**
     * @description 消息描述
     * @var string
     */
    public $text;

    /**
     * @description 消息标题
     * @var string
     */
    public $title;

    /**
     * @description 图片媒体文件id，可以调用上传媒体文件接口获取
     * @var string
     */
    public $picUrl;

}
