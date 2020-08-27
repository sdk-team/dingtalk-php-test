<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdatevariablesSmartworkBpmsProcessinstanceParams;

use AlibabaCloud\Tea\Model;

class variables extends Model {
    protected $_name = [
        'bizAlias' => 'biz_alias',
        'value' => 'value',
        'extValue' => 'ext_value',
    ];
    public function validate() {
        Model::validateRequired('bizAlias', $this->bizAlias, true);
        Model::validateRequired('value', $this->value, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizAlias) {
            $res['biz_alias'] = $this->bizAlias;
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
        if(isset($map['biz_alias'])){
            $model->bizAlias = $map['biz_alias'];
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
     * @description 别名，审批表单控件唯一标识
     * @var string
     */
    public $bizAlias;

    /**
     * @description 表单值
     * @var string
     */
    public $value;

    /**
     * @description 扩展值
     * @var string
     */
    public $extValue;

}
