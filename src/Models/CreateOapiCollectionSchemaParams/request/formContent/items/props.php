<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\formContent\items;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\formContent\items\props\behaviorLinkage;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\formContent\items\props\options;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\formContent\items\props\cols;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\formContent\items\props\rows;

class props extends Model {
    protected $_name = [
        'behaviorLinkage' => 'behavior_linkage',
        'options' => 'options',
        'cols' => 'cols',
        'rows' => 'rows',
        'bizAlias' => 'biz_alias',
        'required' => 'required',
        'placeholder' => 'placeholder',
        'label' => 'label',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->behaviorLinkage) {
            $res['behavior_linkage'] = [];
            if(null !== $this->behaviorLinkage && is_array($this->behaviorLinkage)){
                $n = 0;
                foreach($this->behaviorLinkage as $item){
                    $res['behavior_linkage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->options) {
            $res['options'] = [];
            if(null !== $this->options && is_array($this->options)){
                $n = 0;
                foreach($this->options as $item){
                    $res['options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cols) {
            $res['cols'] = [];
            if(null !== $this->cols && is_array($this->cols)){
                $n = 0;
                foreach($this->cols as $item){
                    $res['cols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rows) {
            $res['rows'] = [];
            if(null !== $this->rows && is_array($this->rows)){
                $n = 0;
                foreach($this->rows as $item){
                    $res['rows'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizAlias) {
            $res['biz_alias'] = $this->bizAlias;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->placeholder) {
            $res['placeholder'] = $this->placeholder;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return props
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['behavior_linkage'])){
            if(!empty($map['behavior_linkage'])){
                $model->behaviorLinkage = [];
                $n = 0;
                foreach($map['behavior_linkage'] as $item) {
                    $model->behaviorLinkage[$n++] = null !== $item ? behaviorLinkage::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['options'])){
            if(!empty($map['options'])){
                $model->options = [];
                $n = 0;
                foreach($map['options'] as $item) {
                    $model->options[$n++] = null !== $item ? options::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['cols'])){
            if(!empty($map['cols'])){
                $model->cols = [];
                $n = 0;
                foreach($map['cols'] as $item) {
                    $model->cols[$n++] = null !== $item ? cols::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['rows'])){
            if(!empty($map['rows'])){
                $model->rows = [];
                $n = 0;
                foreach($map['rows'] as $item) {
                    $model->rows[$n++] = null !== $item ? rows::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['biz_alias'])){
            $model->bizAlias = $map['biz_alias'];
        }
        if(isset($map['required'])){
            $model->required = $map['required'];
        }
        if(isset($map['placeholder'])){
            $model->placeholder = $map['placeholder'];
        }
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 选项级联属性
     * @var array
     */
    public $behaviorLinkage;

    /**
     * @description 带选项的组件的option
     * @var array
     */
    public $options;

    /**
     * @description 矩阵表单组件列定义
     * @var array
     */
    public $cols;

    /**
     * @description 矩阵表单组件行定义
     * @var array
     */
    public $rows;

    /**
     * @description 系统别名
     * @var string
     */
    public $bizAlias;

    /**
     * @description 是否必填
     * @var bool
     */
    public $required;

    /**
     * @description 占位符
     * @var string
     */
    public $placeholder;

    /**
     * @description 标签
     * @var string
     */
    public $label;

    /**
     * @description 控件id
     * @var string
     */
    public $id;

}
