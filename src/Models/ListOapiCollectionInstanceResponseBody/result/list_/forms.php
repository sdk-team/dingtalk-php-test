<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCollectionInstanceResponseBody\result\list_;

use AlibabaCloud\Tea\Model;

class forms extends Model {
    protected $_name = [
        'value' => 'value',
        'label' => 'label',
        'key' => 'key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return forms
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        return $model;
    }
    /**
     * @description 表单的值
     * @var string
     */
    public $value;

    /**
     * @description 名称。当label字段为空或不存在时，忽略这个label和value
     * @var string
     */
    public $label;

    /**
     * @description 表单控件key
     * @var string
     */
    public $key;

}
