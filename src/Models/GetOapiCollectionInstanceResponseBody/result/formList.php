<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCollectionInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class formList extends Model {
    protected $_name = [
        'label' => 'label',
        'key' => 'key',
        'value' => 'value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return formList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        return $model;
    }
    /**
     * @description 表单标签名
     * @var string
     */
    public $label;

    /**
     * @description 控件名
     * @var string
     */
    public $key;

    /**
     * @description 表单值
     * @var string
     */
    public $value;

}
