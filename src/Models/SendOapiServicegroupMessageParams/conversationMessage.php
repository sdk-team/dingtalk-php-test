<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiServicegroupMessageParams;

use AlibabaCloud\Tea\Model;

class conversationMessage extends Model {
    protected $_name = [
        'title' => 'title',
        'text' => 'text',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('text', $this->text, true);
    }
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
     * @return conversationMessage
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
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 内容
     * @var string
     */
    public $text;

}
