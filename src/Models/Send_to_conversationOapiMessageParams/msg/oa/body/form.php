<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg\oa\body;

use AlibabaCloud\Tea\Model;

class form extends Model {
    protected $_name = [
        'value' => 'value',
        'key' => 'key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return form
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        return $model;
    }
    /**
     * @description 消息体的关键字对应的值
     * @var string
     */
    public $value;

    /**
     * @description 消息体的关键字
     * @var string
     */
    public $key;

}
