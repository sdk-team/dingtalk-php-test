<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\oa;

use AlibabaCloud\Tea\Model;

class head extends Model {
    protected $_name = [
        'text' => 'text',
        'bgcolor' => 'bgcolor',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->bgcolor) {
            $res['bgcolor'] = $this->bgcolor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return head
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['text'])){
            $model->text = $map['text'];
        }
        if(isset($map['bgcolor'])){
            $model->bgcolor = $map['bgcolor'];
        }
        return $model;
    }
    /**
     * @description 消息头部标题
     * @var string
     */
    public $text;

    /**
     * @description 消息头部背景颜色
     * @var string
     */
    public $bgcolor;

}
