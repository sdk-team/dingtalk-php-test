<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg;

use AlibabaCloud\Tea\Model;

class markdown extends Model {
    protected $_name = [
        'title' => 'title',
        'text' => 'text',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return markdown
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['text'])){
            $model->text = $map['text'];
        }
        return $model;
    }
    /**
     * @description markdown格式的消息
     * @var string
     */
    public $title;

    /**
     * @description 首屏会话透出的展示内容
     * @var string
     */
    public $text;

}
