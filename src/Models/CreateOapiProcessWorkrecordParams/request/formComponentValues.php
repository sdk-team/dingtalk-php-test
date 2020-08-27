<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiProcessWorkrecordParams\request;

use AlibabaCloud\Tea\Model;

class formComponentValues extends Model {
    protected $_name = [
        'name' => 'name',
        'value' => 'value',
        'extValue' => 'extValue',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('value', $this->value, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->extValue) {
            $res['extValue'] = $this->extValue;
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
        if(isset($map['extValue'])){
            $model->extValue = $map['extValue'];
        }
        return $model;
    }
    /**
     * @description 表单名称
     * @var string
     */
    public $name;

    /**
     * @description 表单值
     * @var string
     */
    public $value;

    /**
     * @description 扩展字段
     * @var string
     */
    public $extValue;

}
