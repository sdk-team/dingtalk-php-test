<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Asyncsend_v2OapiMessageCorpconversationParams\msg\actionCard;

use AlibabaCloud\Tea\Model;

class btnJsonList extends Model {
    protected $_name = [
        'actionUrl' => 'action_url',
        'title' => 'title',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->actionUrl) {
            $res['action_url'] = $this->actionUrl;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return btnJsonList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['action_url'])){
            $model->actionUrl = $map['action_url'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        return $model;
    }
    /**
     * @description 消息点击链接地址，当发送消息为小程序时支持小程序跳转链接，最长500个字符
     * @var string
     */
    public $actionUrl;

    /**
     * @description 使用独立跳转ActionCard样式时的按钮的标题，最长20个字符
     * @var string
     */
    public $title;

}
