<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetwithformSmartworkBpmsProcessinstanceResponseBody\result\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetwithformSmartworkBpmsProcessinstanceResponseBody\result\result\formValues\details;

class formValues extends Model {
    protected $_name = [
        'formId' => 'form_id',
        'bizAlias' => 'biz_alias',
        'name' => 'name',
        'value' => 'value',
        'extValue' => 'ext_value',
        'details' => 'details',
        'componentType' => 'component_type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->formId) {
            $res['form_id'] = $this->formId;
        }
        if (null !== $this->bizAlias) {
            $res['biz_alias'] = $this->bizAlias;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->extValue) {
            $res['ext_value'] = $this->extValue;
        }
        if (null !== $this->details) {
            $res['details'] = [];
            if(null !== $this->details && is_array($this->details)){
                $n = 0;
                foreach($this->details as $item){
                    $res['details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->componentType) {
            $res['component_type'] = $this->componentType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return formValues
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['form_id'])){
            $model->formId = $map['form_id'];
        }
        if(isset($map['biz_alias'])){
            $model->bizAlias = $map['biz_alias'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['ext_value'])){
            $model->extValue = $map['ext_value'];
        }
        if(isset($map['details'])){
            if(!empty($map['details'])){
                $model->details = [];
                $n = 0;
                foreach($map['details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['component_type'])){
            $model->componentType = $map['component_type'];
        }
        return $model;
    }
    /**
     * @description 表单控件id
     * @var string
     */
    public $formId;

    /**
     * @description 表单别名
     * @var string
     */
    public $bizAlias;

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
     * @description 扩展值
     * @var string
     */
    public $extValue;

    /**
     * @description 明细列表
     * @var array
     */
    public $details;

    /**
     * @description 组件类型
     * @var string
     */
    public $componentType;

}
