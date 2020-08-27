<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody\actionCard;

use AlibabaCloud\Tea\Model;

class buttonList extends Model {
    protected $_name = [
        'title' => 'title',
        'actionUrl' => 'action_url',
    ];
    public function validate() {
        Model::validateMaxLength('title', $this->title, 20);
        Model::validateMaxLength('actionUrl', $this->actionUrl, 700);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->actionUrl) {
            $res['action_url'] = $this->actionUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return buttonList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['action_url'])){
            $model->actionUrl = $map['action_url'];
        }
        return $model;
    }
    /**
     * @description 使用独立跳转ActionCard样式时的按钮的标题，最长20个字符
     * @var string
     */
    public $title;

    /**
     * @description 消息点击链接地址，当发送消息为小程序时支持小程序跳转链接，最长500个字符
     * @var string
     */
    public $actionUrl;

}
