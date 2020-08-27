<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessWorkrecordTemplateParams\saveProcessRequest\formComponentList;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessWorkrecordTemplateParams\saveProcessRequest\formComponentList\props\statField;

class props extends Model {
    protected $_name = [
        'id' => 'id',
        'label' => 'label',
        'required' => 'required',
        'notPrint' => 'not_print',
        'placeholder' => 'placeholder',
        'notUpper' => 'not_upper',
        'unit' => 'unit',
        'formula' => 'formula',
        'options' => 'options',
        'format' => 'format',
        'duration' => 'duration',
        'choice' => 'choice',
        'link' => 'link',
        'statField' => 'stat_field',
        'actionName' => 'action_name',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('label', $this->label, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->notPrint) {
            $res['not_print'] = $this->notPrint;
        }
        if (null !== $this->placeholder) {
            $res['placeholder'] = $this->placeholder;
        }
        if (null !== $this->notUpper) {
            $res['not_upper'] = $this->notUpper;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->formula) {
            $res['formula'] = $this->formula;
        }
        if (null !== $this->options) {
            $res['options'] = $this->options;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->choice) {
            $res['choice'] = $this->choice;
        }
        if (null !== $this->link) {
            $res['link'] = $this->link;
        }
        if (null !== $this->statField) {
            $res['stat_field'] = [];
            if(null !== $this->statField && is_array($this->statField)){
                $n = 0;
                foreach($this->statField as $item){
                    $res['stat_field'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->actionName) {
            $res['action_name'] = $this->actionName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return props
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        if(isset($map['required'])){
            $model->required = $map['required'];
        }
        if(isset($map['not_print'])){
            $model->notPrint = $map['not_print'];
        }
        if(isset($map['placeholder'])){
            $model->placeholder = $map['placeholder'];
        }
        if(isset($map['not_upper'])){
            $model->notUpper = $map['not_upper'];
        }
        if(isset($map['unit'])){
            $model->unit = $map['unit'];
        }
        if(isset($map['formula'])){
            $model->formula = $map['formula'];
        }
        if(isset($map['options'])){
            if(!empty($map['options'])){
                $model->options = $map['options'];
            }
        }
        if(isset($map['format'])){
            $model->format = $map['format'];
        }
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        if(isset($map['choice'])){
            $model->choice = $map['choice'];
        }
        if(isset($map['link'])){
            $model->link = $map['link'];
        }
        if(isset($map['stat_field'])){
            if(!empty($map['stat_field'])){
                $model->statField = [];
                $n = 0;
                foreach($map['stat_field'] as $item) {
                    $model->statField[$n++] = null !== $item ? statField::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['action_name'])){
            $model->actionName = $map['action_name'];
        }
        return $model;
    }
    /**
     * @description 表单id
     * @var string
     */
    public $id;

    /**
     * @description 表单名称
     * @var string
     */
    public $label;

    /**
     * @description 是否必填
     * @var bool
     */
    public $required;

    /**
     * @description 是否参与打印(1表示不打印, 0表示打印)
     * @var string
     */
    public $notPrint;

    /**
     * @description 占位提示（仅输入类组件）
     * @var string
     */
    public $placeholder;

    /**
     * @description 是否需要大写 默认是需要; 1:不需要大写, 空或者0:需要大写
     * @var string
     */
    public $notUpper;

    /**
     * @description 数字组件/日期区间组件单位属性
     * @var string
     */
    public $unit;

    /**
     * @description 暂不需要
     * @var string
     */
    public $formula;

    /**
     * @description 单选框或者多选框的选项
     * @var array
     */
    public $options;

    /**
     * @description 时间格式
     * @var string
     */
    public $format;

    /**
     * @description 是否自动计算时长
     * @var bool
     */
    public $duration;

    /**
     * @description 内部联系人choice，1表示多选，0表示单选
     * @var int
     */
    public $choice;

    /**
     * @description 说明文案的链接地址
     * @var string
     */
    public $link;

    /**
     * @description 需要计算总和的明细组件
     * @var array
     */
    public $statField;

    /**
     * @description 增加明细动作名称
     * @var string
     */
    public $actionName;

}
