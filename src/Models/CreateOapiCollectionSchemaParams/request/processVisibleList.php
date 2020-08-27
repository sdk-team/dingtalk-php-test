<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request;

use AlibabaCloud\Tea\Model;

class processVisibleList extends Model {
    protected $_name = [
        'visibleType' => 'visible_type',
        'visibleValue' => 'visible_value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->visibleType) {
            $res['visible_type'] = $this->visibleType;
        }
        if (null !== $this->visibleValue) {
            $res['visible_value'] = $this->visibleValue;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return processVisibleList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['visible_type'])){
            $model->visibleType = $map['visible_type'];
        }
        if(isset($map['visible_value'])){
            $model->visibleValue = $map['visible_value'];
        }
        return $model;
    }
    /**
     * @description 类型
     * @var int
     */
    public $visibleType;

    /**
     * @description 值
     * @var string
     */
    public $visibleValue;

}
