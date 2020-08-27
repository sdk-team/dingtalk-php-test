<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_single_conversationOapiMessageParams\msg;

use AlibabaCloud\Tea\Model;

class markdown extends Model {
    protected $_name = [
        'text' => 'text',
    ];
    public function validate() {
        Model::validateRequired('text', $this->text, true);
    }
    public function toMap() {
        $res = [];
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
        if(isset($map['text'])){
            $model->text = $map['text'];
        }
        return $model;
    }
    /**
     * @description markdown消息内容
     * @var string
     */
    public $text;

}
