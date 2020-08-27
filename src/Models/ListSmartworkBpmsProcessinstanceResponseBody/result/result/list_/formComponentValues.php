<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListSmartworkBpmsProcessinstanceResponseBody\result\result\list_;

use AlibabaCloud\Tea\Model;

class formComponentValues extends Model {
    protected $_name = [
        'name' => 'name',
        'value' => 'value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return formComponentValues
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
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
    public $name;

    /**
     * @description 表单标签值
     * @var string
     */
    public $value;

}
