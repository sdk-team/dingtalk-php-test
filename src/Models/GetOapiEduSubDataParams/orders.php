<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduSubDataParams;

use AlibabaCloud\Tea\Model;

class orders extends Model {
    protected $_name = [
        'fieldName' => 'field_name',
        'order' => 'order',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->fieldName) {
            $res['field_name'] = $this->fieldName;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return orders
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['field_name'])){
            $model->fieldName = $map['field_name'];
        }
        if(isset($map['order'])){
            $model->order = $map['order'];
        }
        return $model;
    }
    /**
     * @description 排序字段名；字段名详见返回字段
     * @var string
     */
    public $fieldName;

    /**
     * @description 升序 asc; 降序 desc；
     * @var string
     */
    public $order;

}
