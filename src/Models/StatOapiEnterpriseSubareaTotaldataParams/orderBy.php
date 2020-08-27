<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatOapiEnterpriseSubareaTotaldataParams;

use AlibabaCloud\Tea\Model;

class orderBy extends Model {
    protected $_name = [
        'field' => 'field',
        'order' => 'order',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->field) {
            $res['field'] = $this->field;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return orderBy
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['field'])){
            $model->field = $map['field'];
        }
        if(isset($map['order'])){
            $model->order = $map['order'];
        }
        return $model;
    }
    /**
     * @description 排查的key
     * @var string
     */
    public $field;

    /**
     * @description 升序或者降序
     * @var string
     */
    public $order;

}
