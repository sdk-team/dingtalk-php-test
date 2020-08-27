<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg\oa;

use AlibabaCloud\Tea\Model;

class head extends Model {
    protected $_name = [
        'bgcolor' => 'bgcolor',
        'text' => 'text',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->bgcolor) {
            $res['bgcolor'] = $this->bgcolor;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return head
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['bgcolor'])){
            $model->bgcolor = $map['bgcolor'];
        }
        if(isset($map['text'])){
            $model->text = $map['text'];
        }
        return $model;
    }
    /**
     * @description 消息头部的背景颜色。长度限制为8个英文字符，其中前2为表示透明度，后6位表示颜色值。不要添加0x
     * @var string
     */
    public $bgcolor;

    /**
     * @description 消息的头部标题 (向普通会话发送时有效，向企业会话发送时会被替换为微应用的名字)，长度限制为最多10个字符
     * @var string
     */
    public $text;

}
