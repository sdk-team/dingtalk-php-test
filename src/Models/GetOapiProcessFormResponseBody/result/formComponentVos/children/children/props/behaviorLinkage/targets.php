<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result\formComponentVos\children\children\props\behaviorLinkage;

use AlibabaCloud\Tea\Model;

class targets extends Model {
    protected $_name = [
        'behavior' => 'behavior',
        'fieldId' => 'field_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->behavior) {
            $res['behavior'] = $this->behavior;
        }
        if (null !== $this->fieldId) {
            $res['field_id'] = $this->fieldId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return targets
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['behavior'])){
            $model->behavior = $map['behavior'];
        }
        if(isset($map['field_id'])){
            $model->fieldId = $map['field_id'];
        }
        return $model;
    }
    /**
     * @description 对应目标的行为
     * @var string
     */
    public $behavior;

    /**
     * @description 对应目标的id
     * @var string
     */
    public $fieldId;

}
