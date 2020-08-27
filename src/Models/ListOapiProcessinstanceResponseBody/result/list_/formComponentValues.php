<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiProcessinstanceResponseBody\result\list_;

use AlibabaCloud\Tea\Model;

class formComponentValues extends Model {
    protected $_name = [
        'name' => 'name',
        'value' => 'value',
        'id' => 'id',
        'extValue' => 'ext_value',
        'componentType' => 'component_type',
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->extValue) {
            $res['ext_value'] = $this->extValue;
        }
        if (null !== $this->componentType) {
            $res['component_type'] = $this->componentType;
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
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['ext_value'])){
            $model->extValue = $map['ext_value'];
        }
        if(isset($map['component_type'])){
            $model->componentType = $map['component_type'];
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

    /**
     * @description 组件id
     * @var string
     */
    public $id;

    /**
     * @description 表单额外值
     * @var string
     */
    public $extValue;

    /**
     * @description 组件类型
     * @var string
     */
    public $componentType;

}
