<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result\formComponentVos\props;

use AlibabaCloud\Tea\Model;

class statField extends Model {
    protected $_name = [
        'unit' => 'unit',
        'upper' => 'upper',
        'label' => 'label',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->upper) {
            $res['upper'] = $this->upper;
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
     * @return statField
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unit'])){
            $model->unit = $map['unit'];
        }
        if(isset($map['upper'])){
            $model->upper = $map['upper'];
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
     * @description 单位
     * @var string
     */
    public $unit;

    /**
     * @description 是否大写
     * @var bool
     */
    public $upper;

    /**
     * @description 标题
     * @var string
     */
    public $label;

    /**
     * @description 组件id
     * @var string
     */
    public $id;

}
