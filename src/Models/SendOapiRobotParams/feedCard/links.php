<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams\feedCard;

use AlibabaCloud\Tea\Model;

class links extends Model {
    protected $_name = [
        'picURL' => 'picURL',
        'messageURL' => 'messageURL',
        'title' => 'title',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->picURL) {
            $res['picURL'] = $this->picURL;
        }
        if (null !== $this->messageURL) {
            $res['messageURL'] = $this->messageURL;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return links
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['picURL'])){
            $model->picURL = $map['picURL'];
        }
        if(isset($map['messageURL'])){
            $model->messageURL = $map['messageURL'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        return $model;
    }
    /**
     * @description 单条信息文本
     * @var string
     */
    public $picURL;

    /**
     * @description 点击单条信息到跳转链接
     * @var string
     */
    public $messageURL;

    /**
     * @description 单条信息后面图片的URL
     * @var string
     */
    public $title;

}
