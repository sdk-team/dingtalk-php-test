<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCollectionFormResponseBody\result;

use AlibabaCloud\Tea\Model;

class visibleList extends Model {
    protected $_name = [
        'type' => 'type',
        'value' => 'value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return visibleList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        return $model;
    }
    /**
     * @description 可见性类型 0部门 1人员 2角色 3群组cid
     * @var int
     */
    public $type;

    /**
     * @description 值
     * @var string
     */
    public $value;

}
