<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListcontactOapiSmartworkHrmEmployeeResponseBody\result;

use AlibabaCloud\Tea\Model;

class fieldList extends Model {
    protected $_name = [
        'groupId' => 'group_id',
        'value' => 'value',
        'fieldCode' => 'field_code',
        'fieldName' => 'field_name',
        'label' => 'label',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->fieldCode) {
            $res['field_code'] = $this->fieldCode;
        }
        if (null !== $this->fieldName) {
            $res['field_name'] = $this->fieldName;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return fieldList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['field_code'])){
            $model->fieldCode = $map['field_code'];
        }
        if(isset($map['field_name'])){
            $model->fieldName = $map['field_name'];
        }
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        return $model;
    }
    /**
     * @description 字段业务分组
     * @var string
     */
    public $groupId;

    /**
     * @description 字段值
     * @var string
     */
    public $value;

    /**
     * @description 字段编码
     * @var string
     */
    public $fieldCode;

    /**
     * @description 字段名称
     * @var string
     */
    public $fieldName;

    /**
     * @description 字段值文本说明
     * @var string
     */
    public $label;

}
