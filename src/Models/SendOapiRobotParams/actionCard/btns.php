<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams\actionCard;

use AlibabaCloud\Tea\Model;

class btns extends Model {
    protected $_name = [
        'actionURL' => 'actionURL',
        'title' => 'title',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->actionURL) {
            $res['actionURL'] = $this->actionURL;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return btns
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['actionURL'])){
            $model->actionURL = $map['actionURL'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        return $model;
    }
    /**
     * @description 按钮方案，
     * @var string
     */
    public $actionURL;

    /**
     * @description 点击按钮触发的URL此消息类型为固定feedCard
     * @var string
     */
    public $title;

}
