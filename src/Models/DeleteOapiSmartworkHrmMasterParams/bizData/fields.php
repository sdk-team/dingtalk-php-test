<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiSmartworkHrmMasterParams\bizData;

use AlibabaCloud\Tea\Model;

class fields extends Model {
    protected $_name = [
        'value' => 'value',
        'name' => 'name',
    ];
    public function validate() {
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return fields
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 字段值原始字符串
     * @var string
     */
    public $value;

    /**
     * @description 字段名
     * @var string
     */
    public $name;

}
