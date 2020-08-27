<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiCrmObjectmetaContactResponseBody\result\fields;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiCrmObjectmetaContactResponseBody\result\fields\referenceFields\selectOptions;

class referenceFields extends Model {
    protected $_name = [
        'label' => 'label',
        'type' => 'type',
        'nillable' => 'nillable',
        'format' => 'format',
        'unit' => 'unit',
        'selectOptions' => 'select_options',
        'name' => 'name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return referenceFields
     */
    public static function fromMap($map = []) {
        $model = new self();
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
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 引用的关联对象字段显示名
     * @var string
     */
    public $label;

    /**
     * @description 引用的关联对象字段类型
     * @var string
     */
    public $type;

    /**
     * @description 引用的关联对象字段是否可空
     * @var bool
     */
    public $nillable;

    /**
     * @description 引用的关联对象字段格式
     * @var string
     */
    public $format;

    /**
     * @description 引用的关联对象字段单位
     * @var string
     */
    public $unit;

    /**
     * @description 引用的关联对象的字段选项列表
     * @var array
     */
    public $selectOptions;

    /**
     * @description 引用的关联对象的字段名称
     * @var string
     */
    public $name;

}
