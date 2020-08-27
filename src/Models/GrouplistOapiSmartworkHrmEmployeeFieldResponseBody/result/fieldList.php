<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GrouplistOapiSmartworkHrmEmployeeFieldResponseBody\result;

use AlibabaCloud\Tea\Model;

class fieldList extends Model {
    protected $_name = [
        'fieldType' => 'field_type',
        'fieldName' => 'field_name',
        'fieldCode' => 'field_code',
        'optionText' => 'option_text',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->fieldType) {
            $res['field_type'] = $this->fieldType;
        }
        if (null !== $this->fieldName) {
            $res['field_name'] = $this->fieldName;
        }
        if (null !== $this->fieldCode) {
            $res['field_code'] = $this->fieldCode;
        }
        if (null !== $this->optionText) {
            $res['option_text'] = $this->optionText;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return fieldList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['field_type'])){
            $model->fieldType = $map['field_type'];
        }
        if(isset($map['field_name'])){
            $model->fieldName = $map['field_name'];
        }
        if(isset($map['field_code'])){
            $model->fieldCode = $map['field_code'];
        }
        if(isset($map['option_text'])){
            $model->optionText = $map['option_text'];
        }
        return $model;
    }
    /**
     * @description 字段类型
     * @var string
     */
    public $fieldType;

    /**
     * @description 字段描述
     * @var string
     */
    public $fieldName;

    /**
     * @description 字段code
     * @var string
     */
    public $fieldCode;

    /**
     * @description 选择字段值
     * @var string
     */
    public $optionText;

}
