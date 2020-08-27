<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartworkHrmEmployeeParams\param\groups\sections;

use AlibabaCloud\Tea\Model;

class section extends Model {
    protected $_name = [
        'value' => 'value',
        'fieldCode' => 'field_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->fieldCode) {
            $res['field_code'] = $this->fieldCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return section
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['field_code'])){
            $model->fieldCode = $map['field_code'];
        }
        return $model;
    }
    /**
     * @description 更新的字段值
     * @var string
     */
    public $value;

    /**
     * @description 更新的字段code
     * @var string
     */
    public $fieldCode;

}
