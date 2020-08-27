<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiSmartworkHrmEmployeeFieldResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'fieldCode' => 'field_code',
        'fieldName' => 'field_name',
        'fieldType' => 'field_type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->fieldCode) {
            $res['field_code'] = $this->fieldCode;
        }
        if (null !== $this->fieldName) {
            $res['field_name'] = $this->fieldName;
        }
        if (null !== $this->fieldType) {
            $res['field_type'] = $this->fieldType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['field_code'])){
            $model->fieldCode = $map['field_code'];
        }
        if(isset($map['field_name'])){
            $model->fieldName = $map['field_name'];
        }
        if(isset($map['field_type'])){
            $model->fieldType = $map['field_type'];
        }
        return $model;
    }
    /**
     * @description 字段code
     * @var string
     */
    public $fieldCode;

    /**
     * @description 字段描述
     * @var string
     */
    public $fieldName;

    /**
     * @description 字段类型
     * @var string
     */
    public $fieldType;

}
