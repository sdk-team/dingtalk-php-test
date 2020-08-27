<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiCrmObjectmetaResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiCrmObjectmetaResponseBody\result\fields\selectOptions;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiCrmObjectmetaResponseBody\result\fields\referenceFields;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiCrmObjectmetaResponseBody\result\fields\rollUpSummaryFields;

class fields extends Model {
    protected $_name = [
        'name' => 'name',
        'customized' => 'customized',
        'label' => 'label',
        'type' => 'type',
        'nillable' => 'nillable',
        'format' => 'format',
        'unit' => 'unit',
        'selectOptions' => 'select_options',
        'quote' => 'quote',
        'referenceTo' => 'reference_to',
        'referenceFields' => 'reference_fields',
        'rollUpSummaryFields' => 'roll_up_summary_fields',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->customized) {
            $res['customized'] = $this->customized;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->nillable) {
            $res['nillable'] = $this->nillable;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->selectOptions) {
            $res['select_options'] = [];
            if(null !== $this->selectOptions && is_array($this->selectOptions)){
                $n = 0;
                foreach($this->selectOptions as $item){
                    $res['select_options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quote) {
            $res['quote'] = $this->quote;
        }
        if (null !== $this->referenceTo) {
            $res['reference_to'] = $this->referenceTo;
        }
        if (null !== $this->referenceFields) {
            $res['reference_fields'] = [];
            if(null !== $this->referenceFields && is_array($this->referenceFields)){
                $n = 0;
                foreach($this->referenceFields as $item){
                    $res['reference_fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rollUpSummaryFields) {
            $res['roll_up_summary_fields'] = [];
            if(null !== $this->rollUpSummaryFields && is_array($this->rollUpSummaryFields)){
                $n = 0;
                foreach($this->rollUpSummaryFields as $item){
                    $res['roll_up_summary_fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return fields
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['customized'])){
            $model->customized = $map['customized'];
        }
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['nillable'])){
            $model->nillable = $map['nillable'];
        }
        if(isset($map['format'])){
            $model->format = $map['format'];
        }
        if(isset($map['unit'])){
            $model->unit = $map['unit'];
        }
        if(isset($map['select_options'])){
            if(!empty($map['select_options'])){
                $model->selectOptions = [];
                $n = 0;
                foreach($map['select_options'] as $item) {
                    $model->selectOptions[$n++] = null !== $item ? selectOptions::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['quote'])){
            $model->quote = $map['quote'];
        }
        if(isset($map['reference_to'])){
            $model->referenceTo = $map['reference_to'];
        }
        if(isset($map['reference_fields'])){
            if(!empty($map['reference_fields'])){
                $model->referenceFields = [];
                $n = 0;
                foreach($map['reference_fields'] as $item) {
                    $model->referenceFields[$n++] = null !== $item ? referenceFields::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['roll_up_summary_fields'])){
            if(!empty($map['roll_up_summary_fields'])){
                $model->rollUpSummaryFields = [];
                $n = 0;
                foreach($map['roll_up_summary_fields'] as $item) {
                    $model->rollUpSummaryFields[$n++] = null !== $item ? rollUpSummaryFields::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 字段名称
     * @var string
     */
    public $name;

    /**
     * @description 是否自定义字段
     * @var bool
     */
    public $customized;

    /**
     * @description 字段展示名
     * @var string
     */
    public $label;

    /**
     * @description 字段类型
     * @var string
     */
    public $type;

    /**
     * @description 是否可空
     * @var bool
     */
    public $nillable;

    /**
     * @description 日期格式
     * @var string
     */
    public $format;

    /**
     * @description 日期单位/金额单位
     * @var string
     */
    public $unit;

    /**
     * @description 选项列表
     * @var array
     */
    public $selectOptions;

    /**
     * @description 是否引用关联
     * @var bool
     */
    public $quote;

    /**
     * @description 关联对象名称
     * @var string
     */
    public $referenceTo;

    /**
     * @description 引用的关联对象的字段列表
     * @var array
     */
    public $referenceFields;

    /**
     * @description 对MasterDetail类型有效：roll-up summary字段列表
     * @var array
     */
    public $rollUpSummaryFields;

}
