<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiFugongHealth_dataResponseBody\result\list_;

use AlibabaCloud\Tea\Model;

class forms extends Model {
    protected $_name = [
        'label' => 'label',
        'value' => 'value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return forms
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        return $model;
    }
    /**
     * @description 名称。当label字段为空或不存在时，忽略这个label和value
     * @var string
     */
    public $label;

    /**
     * @description 表单值
     * @var string
     */
    public $value;

}
