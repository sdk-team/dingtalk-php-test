<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result\formComponentVos\children;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result\formComponentVos\children\props\statField;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result\formComponentVos\children\props\behaviorLinkage;

class props extends Model {
    protected $_name = [
        'label' => 'label',
        'id' => 'id',
        'disable' => 'disable',
        'bizAlias' => 'biz_alias',
        'notPrint' => 'not_print',
        'required' => 'required',
        'bizType' => 'biz_type',
        'invisible' => 'invisible',
        'childFieldVisible' => 'child_field_visible',
        'notUpper' => 'not_upper',
        'statField' => 'stat_field',
        'duration' => 'duration',
        'durationLabel' => 'duration_label',
        'attendTypeLabel' => 'attend_type_label',
        'behaviorLinkage' => 'behavior_linkage',
        'format' => 'format',
        'options' => 'options',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->disable) {
            $res['disable'] = $this->disable;
        }
        if (null !== $this->bizAlias) {
            $res['biz_alias'] = $this->bizAlias;
        }
        if (null !== $this->notPrint) {
            $res['not_print'] = $this->notPrint;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->invisible) {
            $res['invisible'] = $this->invisible;
        }
        if (null !== $this->childFieldVisible) {
            $res['child_field_visible'] = $this->childFieldVisible;
        }
        if (null !== $this->notUpper) {
            $res['not_upper'] = $this->notUpper;
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
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->durationLabel) {
            $res['duration_label'] = $this->durationLabel;
        }
        if (null !== $this->attendTypeLabel) {
            $res['attend_type_label'] = $this->attendTypeLabel;
        }
        if (null !== $this->behaviorLinkage) {
            $res['behavior_linkage'] = [];
            if(null !== $this->behaviorLinkage && is_array($this->behaviorLinkage)){
                $n = 0;
                foreach($this->behaviorLinkage as $item){
                    $res['behavior_linkage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->options) {
            $res['options'] = $this->options;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return props
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['disable'])){
            $model->disable = $map['disable'];
        }
        if(isset($map['biz_alias'])){
            $model->bizAlias = $map['biz_alias'];
        }
        if(isset($map['not_print'])){
            $model->notPrint = $map['not_print'];
        }
        if(isset($map['required'])){
            $model->required = $map['required'];
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        if(isset($map['invisible'])){
            $model->invisible = $map['invisible'];
        }
        if(isset($map['child_field_visible'])){
            $model->childFieldVisible = $map['child_field_visible'];
        }
        if(isset($map['not_upper'])){
            $model->notUpper = $map['not_upper'];
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
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        if(isset($map['duration_label'])){
            $model->durationLabel = $map['duration_label'];
        }
        if(isset($map['attend_type_label'])){
            $model->attendTypeLabel = $map['attend_type_label'];
        }
        if(isset($map['behavior_linkage'])){
            if(!empty($map['behavior_linkage'])){
                $model->behaviorLinkage = [];
                $n = 0;
                foreach($map['behavior_linkage'] as $item) {
                    $model->behaviorLinkage[$n++] = null !== $item ? behaviorLinkage::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['format'])){
            $model->format = $map['format'];
        }
        if(isset($map['options'])){
            if(!empty($map['options'])){
                $model->options = $map['options'];
            }
        }
        return $model;
    }
    /**
     * @description 标题
     * @var string
     */
    public $label;

    /**
     * @description id
     * @var string
     */
    public $id;

    /**
     * @description 是否可编辑
     * @var bool
     */
    public $disable;

    /**
     * @description 业务别名, 当组件属于业务套件的一部分时方便业务识别(DDBizSuite)
     * @var string
     */
    public $bizAlias;

    /**
     * @description 是否参与打印(1表示不打印, 0表示打印)
     * @var string
     */
    public $notPrint;

    /**
     * @description 必填
     * @var bool
     */
    public $required;

    /**
     * @description 业务套件类型(DDBizSuite)
     * @var string
     */
    public $bizType;

    /**
     * @description 隐藏字段
     * @var bool
     */
    public $invisible;

    /**
     * @description 套件内子组件可见性，key为label，value=false不可见
     * @var string
     */
    public $childFieldVisible;

    /**
     * @description 是否需要大写 默认是需要; 1:不需要大写, 空或者0:需要大写
     * @var string
     */
    public $notUpper;

    /**
     * @description 明细里需要统计的字段
     * @var array
     */
    public $statField;

    /**
     * @description 是否开启时长
     * @var bool
     */
    public $duration;

    /**
     * @description 时长文案
     * @var string
     */
    public $durationLabel;

    /**
     * @description 考勤类型文案
     * @var string
     */
    public $attendTypeLabel;

    /**
     * @description 明细里的表单联动属性
     * @var array
     */
    public $behaviorLinkage;

    /**
     * @description 时间格式
     * @var string
     */
    public $format;

    /**
     * @description 选项列表
     * @var array
     */
    public $options;

}
