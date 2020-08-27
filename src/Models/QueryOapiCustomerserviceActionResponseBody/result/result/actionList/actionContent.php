<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceActionResponseBody\result\result\actionList;

use AlibabaCloud\Tea\Model;

class actionContent extends Model {
    protected $_name = [
        'value' => 'value',
        'name' => 'name',
        'displayName' => 'display_name',
        'displayValue' => 'display_value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->displayName) {
            $res['display_name'] = $this->displayName;
        }
        if (null !== $this->displayValue) {
            $res['display_value'] = $this->displayValue;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return actionContent
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['display_name'])){
            $model->displayName = $map['display_name'];
        }
        if(isset($map['display_value'])){
            $model->displayValue = $map['display_value'];
        }
        return $model;
    }
    /**
     * @description 值
     * @var string
     */
    public $value;

    /**
     * @description 键
     * @var string
     */
    public $name;

    /**
     * @description 标签名
     * @var string
     */
    public $displayName;

    /**
     * @description 标签值
     * @var string
     */
    public $displayValue;

}
