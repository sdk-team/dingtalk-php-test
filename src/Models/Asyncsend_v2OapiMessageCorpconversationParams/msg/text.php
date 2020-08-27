<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Asyncsend_v2OapiMessageCorpconversationParams\msg;

use AlibabaCloud\Tea\Model;

class text extends Model {
    protected $_name = [
        'content' => 'content',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return text
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        return $model;
    }
    /**
     * @description 文本消息
     * @var string
     */
    public $content;

}
