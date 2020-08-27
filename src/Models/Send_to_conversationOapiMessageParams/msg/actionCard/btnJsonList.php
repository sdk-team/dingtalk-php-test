<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg\actionCard;

use AlibabaCloud\Tea\Model;

class btnJsonList extends Model {
    protected $_name = [
        'title' => 'title',
        'actionUrl' => 'action_url',
    ];
    public function validate() {}
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
     * @return btnJsonList
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
     * @description 使用独立跳转ActionCard样式时的按钮的链接url
     * @var string
     */
    public $title;

    /**
     * @description 使用独立跳转ActionCard样式时的按钮的标题
     * @var string
     */
    public $actionUrl;

}
