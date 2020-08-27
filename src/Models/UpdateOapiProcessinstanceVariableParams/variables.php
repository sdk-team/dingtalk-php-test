<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiProcessinstanceVariableParams;

use AlibabaCloud\Tea\Model;

class variables extends Model {
    protected $_name = [
        'id' => 'id',
        'value' => 'value',
        'extValue' => 'ext_value',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('value', $this->value, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->extValue) {
            $res['ext_value'] = $this->extValue;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return variables
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['ext_value'])){
            $model->extValue = $map['ext_value'];
        }
        return $model;
    }
    /**
     * @description 表单组件id
     * @var string
     */
    public $id;

    /**
     * @description 表单值
     * @var string
     */
    public $value;

    /**
     * @description 额外信息
     * @var string
     */
    public $extValue;

}
